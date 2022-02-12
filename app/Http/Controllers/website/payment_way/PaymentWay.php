<?php

namespace App\Http\Controllers\website\payment_way;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\payment_way\createRequest;
use App\Http\Requests\website\payment_way\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\PaymentWay as mPaymentWay;
use App\Repositories\website\payment_way\PaymentWayContract as rPaymentWay;


 use App\Repositories\website\shop\ShopContract as rShop;

class PaymentWay extends Controller
{
    private $rPaymentWay;

    public function __construct(rPaymentWay $rPaymentWay)
    {
        $this->rPaymentWay=$rPaymentWay;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rPaymentWay->getByFilter($request,$statistic);

        return view('website.payment_way.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShop $rShop)
    {

$shopList=$rShop->getAllList();

        return view('website.payment_way.create',compact('request','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rPaymentWay->create($request->all());

        return redirect('website/payment_way');
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


        $payment_way=$this->rPaymentWay->show($id);
      $request->merge(['payment_way_id'=>$id,'page_name'=>'page']);



        return view('website.payment_way.show', compact('payment_way','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShop $rShop)
    {


        $payment_way=$this->rPaymentWay->show($id);


 $shopList=$rShop->getAllList();
        return view('website.payment_way.edit', compact('payment_way','shopList'));
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

        $result=$this->rPaymentWay->update($id,$request);

        return redirect('website/payment_way');
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
        $payment_way=$this->rPaymentWay->destroy($id);
        return redirect('website/payment_way');
    }


}
