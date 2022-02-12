<?php

namespace App\Http\Controllers\admin\gift_card_users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\gift_card_users\createRequest;
use App\Http\Requests\admin\gift_card_users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\GiftCardUsers as mGiftCardUsers;
use App\Repositories\admin\gift_card_users\GiftCardUsersContract as rGiftCardUsers;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\gift_card\GiftCardContract as rGiftCard;

class GiftCardUsers extends Controller
{
    private $rGiftCardUsers;

    public function __construct(rGiftCardUsers $rGiftCardUsers)
    {
        $this->rGiftCardUsers=$rGiftCardUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rGiftCardUsers->getByFilter($request,$statistic);

        return view('admin.gift_card_users.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rGiftCard $rGiftCard)
    {

$usersList=$rUsers->getAllList();
$giftCardList=$rGiftCard->getAllList();

        return view('admin.gift_card_users.create',compact('request','usersList','giftCardList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rGiftCardUsers->create($request->all());

        return redirect('admin/gift_card_users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request)
    {


        $gift_card_users=$this->rGiftCardUsers->show($id);
      $request->merge(['gift_card_users_id'=>$id,'page_name'=>'page']);



        return view('admin.gift_card_users.show', compact('gift_card_users','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rGiftCard $rGiftCard)
    {


        $gift_card_users=$this->rGiftCardUsers->show($id);


 $usersList=$rUsers->getAllList();
 $giftCardList=$rGiftCard->getAllList();
        return view('admin.gift_card_users.edit', compact('gift_card_users','usersList','giftCardList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rGiftCardUsers->update($id,$request);

        return redirect('admin/gift_card_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $gift_card_users=$this->rGiftCardUsers->destroy($id);
        return redirect('admin/gift_card_users');
    }


}
