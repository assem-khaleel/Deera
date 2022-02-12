<?php

namespace App\Http\Controllers\admin\offer;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\offer\createRequest;
use App\Http\Requests\admin\offer\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Offer as mOffer;
use App\Repositories\admin\offer\OfferContract as rOffer;

use App\Repositories\admin\coffee\CoffeeContract as rCoffee;
use App\Repositories\admin\shop\ShopContract as rShop;

class Offer extends Controller
{
    private $rOffer;

    public function __construct(rOffer $rOffer)
    {
        $this->rOffer=$rOffer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rOffer->getByFilter($request,$statistic);

        return view('admin.offer.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCoffee $rCoffee,rShop $rShop)
    {

        $coffeeList=$rCoffee->getAllList();


        $shopList=$rShop->getAllList();

        return view('admin.offer.create',compact('request','coffeeList','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rOffer->create($request->all());

        return redirect('admin/offer');
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


        $offer=$this->rOffer->show($id);
      $request->merge(['offer_id'=>$id,'page_name'=>'page']);



        return view('admin.offer.show', compact('offer','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCoffee $rCoffee,rShop $rShop)
    {


        $offer=$this->rOffer->show($id);


        $shopList=$rShop->getAllList();
 $coffeeList=$rCoffee->getAllList();
        return view('admin.offer.edit', compact('offer','coffeeList','shopList'));
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

        $result=$this->rOffer->update($id,$request);

        return redirect('admin/offer');
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
        $offer=$this->rOffer->destroy($id);
        return redirect('admin/offer');
    }


}
