<?php

namespace App\Http\Controllers\admin\order_driver;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\order_driver\createRequest;
use App\Http\Requests\admin\order_driver\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Order as mOrder;
use App\Models\OrderDriver as mOrderDriver;
use App\Repositories\admin\order_driver\OrderDriverContract as rOrderDriver;
use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;
use App\Repositories\admin\shop\ShopContract as rShop;
use App\Repositories\admin\area\AreaContract as rArea;

use App\Repositories\admin\service_boy\ServiceBoyContract as rServiceBoy;

use App\Repositories\admin\users\UsersContract as rUsers;
use App\Repositories\admin\order\OrderContract as rOrder;

class OrderDriver extends Controller
{
    private $rOrderDriver;

    public function __construct(rOrderDriver $rOrderDriver)
    {
        $this->rOrderDriver = $rOrderDriver;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults = $this->rOrderDriver->getByFilter($request);

        return view('admin.order_driver.index', compact('oResults', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request, rUsers $rUsers, rOrder $rOrder, rShopUsers $rShopUsers)
    {

        $drivers = [];

        if (isset($request->showDriverOrders) || isset($request->order_id)) {
            $filterOrderDriver = ($request->showDriverOrders) ? ['users_id' => $request->showDriverOrders] : ['order_id' => $request->order_id];
            $oOrderDriverResults = $this->rOrderDriver->getByFilter($filterOrderDriver);

            foreach ($oOrderDriverResults as $oOrderDriverResult) {

                $drivers[] = [
                    'id' => $oOrderDriverResult->users_id,
                    'order_driver_id' => $oOrderDriverResult->id,
                    'order_id' => $oOrderDriverResult->order_id,
                    'name' => $oOrderDriverResult->users->first_name . ' ' . $oOrderDriverResult->users->last_name,
                    'shop_name' => (isset($oOrderDriverResult->order->shop)) ? $oOrderDriverResult->order->shop->name_en : 'deera Driver',
                    'address_name' => 'Driver Place',
                    'driver_status' => config('array.order_driver_status')[$oOrderDriverResult->status],
                    'location' => $oOrderDriverResult->current_lat . ',' . $oOrderDriverResult->current_long
                ];
            }

        } else {
            $oShopUsers = $rShopUsers->getByFilter(['type' => config('array.shop_users_type_driver_index')]);

            foreach ($oShopUsers as $rShopUser) {

                foreach ($rShopUser->users->address as $address) {
                    $drivers[] = [
                        'id' => $rShopUser->users_id,
                        'name' => $rShopUser->users->first_name . ' ' . $rShopUser->users->last_name,
                        'shop_name' => (isset($rShopUser->shop)) ? $rShopUser->shop->name_en : 'deera Driver',
                        'address_name' => $address->name,
                        'driver_status' => config('array.shop_users_status')[$rShopUser->status],
                        'location' => $address->lat . ',' . $address->long
                    ];
                }

            }
        }
        $orders = [];


        $ordersFilter = [
            'status' => [config('array.order_status_payed_index'), config('array.order_status_reject_index')]
        ];

        if (isset($request->showDriverOrders)) {


            /* Controllers\admin\order_driver\OrderDriver.php TODO 2 -  if the status no running or current with driver add status here*/
            $ordersFilter = [
                'status' => [
                    config('array.order_status_pending_index'),
                    config('array.order_status_payed_index'),
                    config('array.order_status_delivering_index'),
                    config('array.order_status_preparing_index'),
                    config('array.order_status_ready_index'),
                    config('array.order_status_delay_index')
                ],
                'driver_id' => $request->showDriverOrders
            ];

        } elseif ($request->order_id) {
            $ordersFilter = ['id' => $request->order_id];
        }

        $oOrderResults = $rOrder->getByFilter($ordersFilter);


        foreach ($oOrderResults as $oOrder) {

            $orders[] = [
                'order_id' => $oOrder->id,
                'address_name' => $oOrder->address->name,
                'shop_name' => $oOrder->shop->name_en,
                'order_status' => config('array.order_status')[$oOrder->status],
                'location' => $oOrder->address->lat . ',' . $oOrder->address->long,
                'order_driver_id' => $oOrder->driverOrder,
                'deliver_date' => $oOrder->deliver_date . ' ' . $oOrder->deliver_time,
                'deliver_time' => $oOrder->deliver_time,

            ];

        }


        return view('admin.order_driver.create', compact('request', 'drivers', 'orders'));
//$usersList=$rUsers->getAllList();
//$orderList=$rOrder->getAllList();
//
//        return view('admin.order_driver.create',compact('request','usersList','orderList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

        $order_ids = (is_array($request->order_id)) ? $request->order_id : [$request->order_id];

        $userData = explode(',', $request->users_id);

        foreach ($order_ids as $order_id) {

            mOrderDriver::where(['order_id' => $order_id])->delete();
            $oResults = $this->rOrderDriver->create([
                'order_id' => $order_id,
                'users_id' => $userData[0],
                'current_lat' => $userData[1],
                'current_long' => $userData[2],
                'status' => config('array.order_driver_status_pending_index'),
                'notification' => 0
            ]);
            if ($oResults) {
                mOrder::find($order_id)->update([
                    'expected_time' => $request->expected_time[$order_id] . ':00',
                    'status' => config('array.order_status_delivering_index')
                ]);
            }
        }

        return redirect('admin/order_driver');
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


        $order_driver = $this->rOrderDriver->show($id);
        $request->merge(['order_driver_id' => $id, 'page_name' => 'page']);


        return view('admin.order_driver.show', compact('order_driver', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, rUsers $rUsers, rOrder $rOrder)
    {


        $order_driver = $this->rOrderDriver->show($id);


        $usersList = $rUsers->getAllList();
        $orderList = $rOrder->getAllList();
        return view('admin.order_driver.edit', compact('order_driver', 'usersList', 'orderList'));
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

        $result = $this->rOrderDriver->update($id, $request);

        return redirect('admin/order_driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $order_driver = $this->rOrderDriver->destroy($id);
        return redirect('admin/order_driver');
    }

    public function getDispatcherMap(
        Request $request,
        rUsers $rUsers,
        rOrder $rOrder,
        rShopUsers $rShopUsers,
        rShop $rShop,
        rServiceBoy $rServiceBoy
    ) {
        $current_date = date('Y-m-d');
        if (!isset($request->selected_date)) {
            $request->merge(['selected_date' => $current_date]);
        }
        $dateList = [];
        for ($i = 0; $i < 7; $i++) {
            $oneDate = date('Y-m-d', strtotime($current_date . ' + ' . $i . ' day'));
            $dateList[$oneDate] = $oneDate;
        }


        $oShopResults = $rShop->getByFilter($request);

        if (!isset($request->selected_shop_id)) {
            $request->merge(['selected_shop_id' => '']);
        }

        $oShopUsers = $rShopUsers->getByFilter([
            'shop_id' => $request->selected_shop_id,
            'date' => $request->selected_date,
            'type' => config('array.shop_users_type_driver_index')
        ]);



        /* Controllers\admin\order_driver\OrderDriver.php TODO 1 (getDispatcherMap)-  if the status is need to be assign to driver or need to display for dispatcher add status here*/
        $request->merge([
            'status' => [
                config('array.order_status_payed_index'),
                config('array.order_status_preparing_index'),
                config('array.order_status_ready_index'),
                config('array.order_status_reject_index')
            ],
        ]);
        $oOrderResults = $rOrder->getByFilter($request);
        $serviceBoyList = $rServiceBoy->getByFilter([]);

        return view('admin.order_driver.dispatcherMap',
            compact('request', 'oShopUsers', 'dateList', 'oOrderResults', 'oShopResults',
                'serviceBoyList'));

    }


    public function getDriverMap(
        Request $request,
        rUsers $rUsers,
        rOrder $rOrder,
        rShopUsers $rShopUsers,
        rShop $rShop
    ) {
        if (!isset($request->driver_id)) {
            $request->merge(['driver_id' => current_user()->getUser()->id,]);
        }


        $current_date = date('Y-m-d');
        if (!isset($request->selected_date)) {
            $request->merge(['selected_date' => $current_date]);
        }
        $dateList = [];
        for ($i = 1; $i <= 7; $i++) {
            $oneDate = date('Y-m-d', strtotime($current_date . ' + ' . $i . ' day'));
            $dateList[$oneDate] = $oneDate;
        }


        $oShopResults = $rShop->getByFilter($request);
        if (!isset($request->selected_shop_id)) {
            $request->merge(['selected_shop_id' => '']);
        }

        $oShopUsers = $rShopUsers->getByFilter([
            'users_id' => $request->driver_id,
            'shop_id' => $request->selected_shop_id,
            'date' => $request->selected_date,
            'type' => config('array.shop_users_type_driver_index')
        ]);


        $oOrderResults = $rOrder->getByFilter($request);


        return view('admin.order_driver.driverMap',
            compact('request', 'oShopUsers', 'dateList', 'oOrderResults', 'oShopResults'));

    }


    public function getOrderMap(
        Request $request,
        rUsers $rUsers,
        rOrder $rOrder,
        rShopUsers $rShopUsers,
        rShop $rShop
    ) {


        $oOrderResult = $rOrder->getByFilter(['id' => $request->order_id])->first();
        $oOrderDrivers = $this->rOrderDriver->getByFilter(['order_id' => $request->order_id])->first();
        $oShopUsers=[];
        if(count($oOrderDrivers)){
        $oShopUsers = $rShopUsers->getByFilter(['users_id' => $oOrderDrivers->users_id]);
    }

        return view('admin.order_driver.orderMap', compact('request', 'oShopUsers', 'oOrderResult'));

    }


    public function getAllOrdersMap(
        Request $request,
        rUsers $rUsers,
        rOrder $rOrder,
        rShopUsers $rShopUsers,
        rShop $rShop,
        rArea $rArea
    ) {


        $oOrderResults = $rOrder->getByFilter(['getAllRecords' => 1]);
        $areaList = $rArea->getAllList();

$areaOrderNumber=[];
        foreach ($oOrderResults as $order) {
            if (isset($order->address) && isset($order->address->area_id)) {
                if (!isset($areaOrderNumber[$order->address->area_id])) {
                    $areaOrderNumber[$order->address->area_id] = 0;
                }
                $areaOrderNumber[$order->address->area_id] += 1;

            }
        }
        return view('admin.order_driver.allOrdersMap', compact('request', 'oOrderResults', 'areaList','areaOrderNumber'));

    }
}
