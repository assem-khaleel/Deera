<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\order\createRequest;
use App\Http\Requests\admin\order\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Order as mOrder;
use App\Repositories\admin\order\OrderContract as rOrder;

use App\Repositories\admin\users\UsersContract as rUsers;
use App\Repositories\admin\area\AreaContract as rArea;
use App\Repositories\admin\address\AddressContract as rAddress;
use App\Repositories\admin\shop\ShopContract as rShop;

use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;
use App\Repositories\admin\cart\CartContract as rCart;
use App\Repositories\admin\coffee\CoffeeContract as rCoffee;
use App\Repositories\admin\menu_section\MenuSectionContract as rMenuSection;

class Order extends Controller
{
    private $rOrder;

    public function __construct(rOrder $rOrder)
    {
        $this->rOrder=$rOrder;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rArea $rArea,rCoffee $rCoffee,rShop $rShop,rMenuSection $rMenuSection)
    {

        $this->rOrder->exportExcel($request);

        $oResults=$this->rOrder->getByFilter($request);

        $areaList=$rArea->getAllList();
        $coffeeList=$rCoffee->getAllList();


        $orderStatistics=$this->rOrder->getStatistics($request);
        $shopList=$rShop->getAllList();
        $menuSectionList=$rMenuSection->getAllList();
        return view('admin.order.index', compact('oResults','request','areaList','coffeeList','orderStatistics','shopList','menuSectionList'))->with($orderStatistics);
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function getBill(Request $request,rArea $rArea,rCoffee $rCoffee,rShop $rShop,rMenuSection $rMenuSection)
    {

        $this->rOrder->exportBillExcel($request);

        $oResults=$this->rOrder->getByFilter($request);

        $areaList=$rArea->getAllList();
        $coffeeList=$rCoffee->getAllList();


        $orderStatistics=$this->rOrder->getStatistics($request);
        $shopList=$rShop->getAllList();
        $menuSectionList=$rMenuSection->getAllList();
        return view('admin.order.bill', compact('oResults','request','areaList','coffeeList','orderStatistics','shopList','menuSectionList'))->with($orderStatistics);
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function orderChart(Request $request,rCart $rCart)
    {


        $orderMainChart=$this->rOrder->orderMainChart($request);
        return view('admin.order.orderChart',compact('request','orderMainChart'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rArea $rArea,rAddress $rAddress,rShop $rShop)
    {

        $usersList=$rUsers->getAllList();
        $areaList=$rArea->getAllList();
        $addressList=$rAddress->getAllList();
        $shopList=$rShop->getAllList();

        return view('admin.order.create',compact('request','usersList','areaList','addressList','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rOrder->create($request->all());

        return redirect('admin/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCart $rCart)
    {


        $order=$this->rOrder->show($id);
        $request->merge(['order_id'=>$id,'page_name'=>'page']);

        $request->page_name='page_cart';
        $oCartResults=$rCart->getByFilter($request);


        return view('admin.order.show', compact('order','request','oCartResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rArea $rArea,rAddress $rAddress,rShop $rShop)
    {


        $order=$this->rOrder->show($id);


        $usersList=$rUsers->getAllList();
        $areaList=$rArea->getAllList();
        $addressList=$rAddress->getAllList();

        $shopList=$rShop->getAllList();
        return view('admin.order.edit', compact('order','usersList','areaList','addressList','shopList'));
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

        $result=$this->rOrder->update($id,$request);

        return redirect('admin/order');
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
        $order=$this->rOrder->destroy($id);
        return redirect('admin/order');
    }

    public function deliverMap(rShopUsers $rShopUsers){

    }

    public function assignOrder(){

    }



//----------------------- send order email 


    public function sendemail(){

        return view('admin.order.emailorder');

    }





    public function postsendemail(Request $request){

        return view('admin.order.emailorder');


    }








//----------------------------










}
