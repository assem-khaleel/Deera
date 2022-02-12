<?php

namespace App\Http\Controllers\admin\gift_card_order;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\gift_card_order\createRequest;
use App\Http\Requests\admin\gift_card_order\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\GiftCardOrder as mGiftCardOrder;
use App\Repositories\admin\gift_card_order\GiftCardOrderContract as rGiftCardOrder;

 use App\Repositories\admin\order\OrderContract as rOrder;
 use App\Repositories\admin\gift_card\GiftCardContract as rGiftCard;

class GiftCardOrder extends Controller
{
    private $rGiftCardOrder;

    public function __construct(rGiftCardOrder $rGiftCardOrder)
    {
        $this->rGiftCardOrder=$rGiftCardOrder;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rGiftCardOrder->getByFilter($request,$statistic);

        return view('admin.gift_card_order.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rOrder $rOrder,rGiftCard $rGiftCard)
    {

$orderList=$rOrder->getAllList();
$giftCardList=$rGiftCard->getAllList();

        return view('admin.gift_card_order.create',compact('request','orderList','giftCardList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rGiftCardOrder->create($request->all());

        return redirect('admin/gift_card_order');
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


        $gift_card_order=$this->rGiftCardOrder->show($id);
      $request->merge(['gift_card_order_id'=>$id,'page_name'=>'page']);



        return view('admin.gift_card_order.show', compact('gift_card_order','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rOrder $rOrder,rGiftCard $rGiftCard)
    {


        $gift_card_order=$this->rGiftCardOrder->show($id);


 $orderList=$rOrder->getAllList();
 $giftCardList=$rGiftCard->getAllList();
        return view('admin.gift_card_order.edit', compact('gift_card_order','orderList','giftCardList'));
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

        $result=$this->rGiftCardOrder->update($id,$request);

        return redirect('admin/gift_card_order');
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
        $gift_card_order=$this->rGiftCardOrder->destroy($id);
        return redirect('admin/gift_card_order');
    }


}
