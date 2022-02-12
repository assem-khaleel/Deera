<?php

namespace App\Http\Controllers\website\gift_card;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\gift_card\createRequest;
use App\Http\Requests\website\gift_card\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\GiftCard as mGiftCard;
use App\Repositories\website\gift_card\GiftCardContract as rGiftCard;

 use App\Repositories\website\gift_card_users\GiftCardUsersContract as rGiftCardUsers;
 use App\Repositories\website\gift_card_order\GiftCardOrderContract as rGiftCardOrder;

class GiftCard extends Controller
{
    private $rGiftCard;

    public function __construct(rGiftCard $rGiftCard)
    {
        $this->rGiftCard=$rGiftCard;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rGiftCard->getByFilter($request,$statistic);

        return view('website.gift_card.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('website.gift_card.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rGiftCard->create($request->all());

        return redirect('website/gift_card');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rGiftCardUsers $rGiftCardUsers,rGiftCardOrder $rGiftCardOrder)
    {


        $gift_card=$this->rGiftCard->show($id);
      $request->merge(['gift_card_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_gift_card_users';
    $oGiftCardUsersResults=$rGiftCardUsers->getByFilter($request);
    $request->page_name='page_gift_card_order';
    $oGiftCardOrderResults=$rGiftCardOrder->getByFilter($request);

        return view('website.gift_card.show', compact('gift_card','request','oGiftCardUsersResults','oGiftCardOrderResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id)
    {


        $gift_card=$this->rGiftCard->show($id);


        return view('website.gift_card.edit', compact('gift_card'));
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

        $result=$this->rGiftCard->update($id,$request);

        return redirect('website/gift_card');
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
        $gift_card=$this->rGiftCard->destroy($id);
        return redirect('website/gift_card');
    }


}
