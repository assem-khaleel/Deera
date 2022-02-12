<?php

namespace App\Http\Controllers\website\gift_card_users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\gift_card_users\createRequest;
use App\Http\Requests\website\gift_card_users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use Illuminate\Http\JsonResponse;

use App\Models\GiftCardUsers as mGiftCardUsers;
use App\Repositories\website\gift_card_users\GiftCardUsersContract as rGiftCardUsers;

use App\Repositories\website\users\UsersContract as rUsers;
use App\Repositories\website\gift_card\GiftCardContract as rGiftCard;

class GiftCardUsers extends Controller
{
    private $rGiftCardUsers;

    public function __construct(rGiftCardUsers $rGiftCardUsers)
    {
        $this->rGiftCardUsers = $rGiftCardUsers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $statistic = null;
        $request->merge(['users_id'=>current_user()->getUser()->id,'status'=>config('array.gift_card_users_status_users_have_index')]);
        $oResults = $this->rGiftCardUsers->getByFilter($request, $statistic);

        return view('website.gift_card_users.index', compact('oResults', 'request', 'statistic'));
    }

    public function getCheckout(Request $request){

        $giftCards = $this->rGiftCardUsers->getByFilter(['users_id'=>current_user()->getUser()->id,'status'=>[config('array.gift_card_users_status_pending_index')] ]);

        return view('website.gift_card_users.checkout',compact('request','giftCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request, rUsers $rUsers, rGiftCard $rGiftCard)
    {

        $usersList = $rUsers->getAllList();
        $oGiftCardResults = $rGiftCard->getByFilter([]);

        return view('website.gift_card_users.create', compact('request', 'usersList', 'oGiftCardResults'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function addToCart(Request $request, rUsers $rUsers, rGiftCard $rGiftCard)
    {

        $usersList = $rUsers->getAllList();
        $oGiftCardResult = $rGiftCard->show($request->gift_cart_id);

        return view('website.gift_card_users.addToCart', compact('request', 'usersList', 'oGiftCardResult'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request,rGiftCard $rGiftCard)
    {



        if(isset($request->gift_card_id)){
            $request->gift_card_id=is_array($request->gift_card_id)?$request->gift_card_id:[$request->gift_card_id];
            foreach($request->gift_card_id as $gift_card_id){
                $oGiftCard=$rGiftCard->show($gift_card_id);
                $data=[
                    "sender_id"=>0,
                    "users_id"=>current_user()->getUser()->id,
                    "gift_card_id"=>$gift_card_id,
                    "price"=>$oGiftCard->price,
                    "status"=>config('array.gift_card_users_status_pending_index'),
                    "balance"=>$oGiftCard->discount,
                    "hash"=>hash("sha256",rand(0,8787).$gift_card_id.rand(111111,9999999999)),
                    "payment_type"=>$request->payment_type,
                    "quantity"=>$request->quantity
                ];
                $oResults = $this->rGiftCardUsers->create($data);

            }

            return redirect('/gift_card_users');
        }

        return redirect('/gift_card_users/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function show($id, Request $request)
    {


        $gift_card_users = $this->rGiftCardUsers->show($id);
        $request->merge(['gift_card_users_id' => $id, 'page_name' => 'page']);


        return view('website.gift_card_users.show', compact('gift_card_users', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, rUsers $rUsers, rGiftCard $rGiftCard)
    {


        $gift_card_users = $this->rGiftCardUsers->show($id);


        $usersList = $rUsers->getAllList();
        $giftCardList = $rGiftCard->getAllList();
        return view('website.gift_card_users.edit', compact('gift_card_users', 'usersList', 'giftCardList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result = $this->rGiftCardUsers->update($id, $request);

        if($request->ajax()){
            return new JsonResponse(['status'=>'success'],200);
        }
        return redirect('/gift_card_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function destroy($id,Request $request)
    {
        $gift_card_users = $this->rGiftCardUsers->destroy($id);

        if($request->ajax()){
            return new JsonResponse(['status'=>'success'],200);
        }
        return redirect('website/gift_card_users');
    }


//website.gift_card.send

    public function getSendCard(Request $request){

        return view('website.gift_card_users.sendCard',compact('request'));
    }
    public function postSendCard(Request $request,rUsers $rUsers){
        $newUsers=$rUsers->show(0,['email'=>$request->email]);


if(!isset($newUsers->id) ){

    return new JsonResponse([trans('website.usersNotExist')],422);
//    return Redirect::back()->withErrors(trans('website.usersNotExist'));
}

        $oGiftCardUsers=$this->rGiftCardUsers->show($request->users_gift_card_id);
        if(count($oGiftCardUsers) && $oGiftCardUsers->users_id==current_user()->getUser()->id){

            $oldCard=[

                "status"=>config('array.gift_card_users_status_sent_index'),
            ];

            $removeFromUserResult = $this->rGiftCardUsers->update($oGiftCardUsers->id,$oldCard);
            $data=[
                "sender_id"=>current_user()->getUser()->id,
                "users_id"=>$newUsers->id,
                "gift_card_id"=>$oGiftCardUsers->gift_card_id,
                "price"=>$oGiftCardUsers->price,
                "status"=>$oGiftCardUsers->status,
                "balance"=>$oGiftCardUsers->balance,
                "hash"=>hash("sha256",rand(0,8787).($oGiftCardUsers->id).rand(111111,9999999999)),
                "payment_type"=>$oGiftCardUsers->payment_type
            ];
            $oResults = $this->rGiftCardUsers->create($data);
            return new JsonResponse(['status'=>'success'],200);
        }else{

            return new JsonResponse([trans('website.cardNotExist')],422);
//            return Redirect::back()->withErrors(trans('website.cardNotExist'));
        }

    }


//website.gift_card.confirmPayment
    public function getConfirmCardPayment(Request $request){

        $oGiftCardUsers=$this->rGiftCardUsers->show($request->users_gift_card_id);

        return Redirect::to(route('website.gift_card.callbackConfirmPayment').'?hash='.$oGiftCardUsers->hash);
    }


    public function callbackConfirmCardPayment(Request $request){

        $oGiftCardUsers=$this->rGiftCardUsers->show(0,['hash'=>$request->hash]);
        $this->rGiftCardUsers->update($oGiftCardUsers->id,['status'=>config('array.gift_card_users_status_completed_index')]);

        return Redirect::to('/gift_card_users');

    }

}
