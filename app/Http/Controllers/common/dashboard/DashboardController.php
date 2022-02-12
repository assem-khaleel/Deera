<?php

namespace App\Http\Controllers\common\dashboard;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Repositories\admin\shop\ShopContract as rShop;

use App\Repositories\admin\area\AreaContract as rArea;
use App\Repositories\admin\category\CategoryContract as rCategory;
use App\Repositories\admin\delivery_menu\DeliveryMenuContract as rDeliveryMenu;
use App\Repositories\admin\shop_rate\ShopRateContract as rShopRate;
use App\Repositories\admin\shop_cuisine\ShopCuisineContract as rShopCuisine;
use App\Repositories\admin\menu_section\MenuSectionContract as rMenuSection;
use App\Repositories\admin\coffee\CoffeeContract as rCoffee;
use App\Repositories\admin\coffee_rate\CoffeeRateContract as rCoffeeRate;
use App\Repositories\admin\shop_area\ShopAreaContract as rShopArea;
use App\Repositories\admin\operation_hour\OperationHourContract as rOperationHour;
use App\Repositories\admin\cart\CartContract as rCart;
use App\Repositories\admin\order\OrderContract as rOrder;
use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;

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
    public function index(Request $request,rOrder $rOrder,rCart $rCart)
    {

        $oCartResults=$rCart->getByFilter($request);
        $orderStatistics=$rOrder->getStatistics($request);
return view('common.dashboard.index',compact('oCartResults','request'))->with($orderStatistics);
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
