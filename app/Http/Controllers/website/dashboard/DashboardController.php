<?php

namespace App\Http\Controllers\website\dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use App\Models\Order;
use App\Repositories\website\area\AreaContract as rArea;
use App\Repositories\website\cuisine\CuisineContract as rCuisine;
use App\Repositories\website\shop\ShopContract as rShop;

class DashboardController extends Controller
{

    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rCuisine $rCuisine,rArea $rArea,rShop $rShop)
    {
        $oCuisines=$rCuisine->getByFilter([]);
        $aCuisines=[''=>trans('website.selectCuisine')]; foreach($oCuisines as $oCuisine){$aCuisines[$oCuisine->id]=$oCuisine->name_en;}

        $oShops=$rShop->getByFilter([]);
        $aShops=[''=>trans('website.selectShop')]; foreach($oShops as $oShop){$aShops[$oShop->id]=$oShop->name_en;}


        $oAreas=$rArea->getAllList();
       // sort($oAreas);
        $aAreas=[''=>trans('website.selectArea')]+$oAreas;

        $currentOrder=Order::with('users','shop','area')->where('status',config('array.order_status_delivering_index'))->orderBy('id','desc')->limit(1)->get();

return view('website.dashboard.index', compact('aCuisines','aShops','aAreas','currentOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {

    }


}
