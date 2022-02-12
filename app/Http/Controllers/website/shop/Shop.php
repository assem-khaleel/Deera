<?php

namespace App\Http\Controllers\website\shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use App\Http\Requests\website\shop\createRequest;
use App\Models\Offer as mOffer;

use App\Repositories\website\shop\ShopContract as rShop;
use App\Repositories\website\coffee\CoffeeContract as rCoffee;
use App\Repositories\website\order\OrderContract as rOrder;
use App\Repositories\website\area\AreaContract as rArea;
use App\Repositories\website\menu_section\MenuSectionContract as rMenuSection;
use Illuminate\Http\JsonResponse;

class Shop extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request, rShop $rShop, rArea $rArea)
    {


        $request->merge(['getAllRecords' => 1]);
        $oResults = $rShop->getByFilter($request);

        if (isset($request->deliver_type)) {
            \Session::set('deliver_type', $request->deliver_type);
        }

        if (isset($request->area_id)) {
            \Session::set('area_id', $request->area_id);
        }


        $oAreas = $rArea->getByFilter(['getAllRecords' => 1]);
        $aAreas = ['' => trans('website.selectArea')];
        foreach ($oAreas as $oArea) {
            $aAreas[$oArea->id] = $oArea->{'name_' . config('app.locale')};
        }

        $shopList=$rShop->getAllList();
        if($request->ajax()){

            return new JsonResponse(['nyKey'=>$shopList],200);
        }
//sort($shopList);
        return view('website.shop.index', compact('request', 'oResults', 'aAreas','shopList'));
    }

    public function getMenuItem(
        Request $request,
        rShop $rShop,
        rCoffee $rCoffee,
        rMenuSection $rMenuSection
    ) {

        $offerIdsArray= mOffer::lists('coffee_id','coffee_id')->toArray();

        $request->merge(['getAllRecords' => 1]);
        $oResults = $rCoffee->getByFilter(['shop_id'=>$request->shop_id,'getAllRecords' => 1,'status'=>config('array.coffee_status_available_index')]);
        $oShop = $rShop->show($request->shop_id);

        if($request->ajax()){

            return new JsonResponse($oShop,200);
        }
        $oMenuSectionResults = $rMenuSection->getByFilter(['shop_id' => $request->shop_id]);

        return view('website.shop.menuItem',
            compact('request', 'oResults', 'oShop', 'oMenuSectionResults','offerIdsArray'))
            ->with($this->getShopData($oShop));

    }

    private function getShopData($oShop)
    {

$area_id=(\Session::has('area_id'))? \Session::get('area_id'):$oShop->area_id;

        $allAreaAvailableDayTime=$this->allAreaAvailableDayTime($oShop);

        $data =  [
            'deliver_time_from'=>$oShop->deliver_time_from,
            'deliver_time_to'=>$oShop->deliver_time_to,
            'expected_deliver_time'=>$oShop->expected_deliver_time,
            'areaName'=>$oShop->area->{'name_'.config('app.locale')},
            'rate'=>$oShop->rating,
            'url'=>$oShop->url


        ];
        if(array_key_exists($area_id,$allAreaAvailableDayTime)){

                $data['deliver_time_from']=$allAreaAvailableDayTime[$area_id]['from'];
            $data['deliver_time_to']=$allAreaAvailableDayTime[$area_id]['to'];
            $data['expected_deliver_time']=$allAreaAvailableDayTime[$area_id]['expected_deliver_time'];
            $data['areaName']=$allAreaAvailableDayTime[$area_id]['name'];

        }


        return $data;
        // dd(\Session::get('deliver_type'),\Session::get('area_id'));
    }
    /**
     *
     * get areas can deliver to and times from to and days to deliver
     *
     * @param $oShop
     * @return array of days and time from to (for each area)['areaId']['from','to','days']
     */
    private function allAreaAvailableDayTime($oShop)
    {

        $areaAvailableDayTime = [];

        $allDays = array_keys(config('array.days'));

        $areaAvailableDayTime[$oShop->area_id] = [
            'from' => $oShop->deliver_time_from,
            'to' => $oShop->deliver_time_to,
            'expected_deliver_time'=>$oShop->expected_deliver_time,

            'name'=>$oShop->area->{'name_'.config('app.locale')},
        ];


        if (count($oShop->shop_area)) {
            foreach ($oShop->shop_area as $oneArea) {

                $areaAvailableDayTime[$oneArea->area_id] = [
                    'name'=>$oneArea->area->{'name_'.config('app.locale')},
                    'from' => $oneArea->deliver_time_from,
                    'to' => $oneArea->deliver_time_to,
                    'expected_deliver_time'=>$oneArea->expected_deliver_time,

                ];



            }
        }


        return $areaAvailableDayTime;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {
        return view('website.shop.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request, rShop $rShop)
    {

        $request->merge(['status'=>0]);
        $oResults = $rShop->create($request->all());




        @\Mail::send('website.shop.email', ['request'=>$request], function($message) use($request)
        {

            $message->from('info@cofedistrict.com', 'Cofe District  - New Shop');


            $message->to($request->email);
//            $message->cc('taylorsuccessor@gmail.com');



        });


       // if($request->ajax()){

            return new JsonResponse(['status' => trans('api.success')],200);
        //}

        return redirect('/thank');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id, Request $request, rShop $rShop)
    {
        $shop = $rShop->show($id);

        $shopAreaList = [];

        $selected_area_id = (isset($request->selected_area_id)) ? $request->selected_area_id : 0;
        $selected_area = [];
        if (isset($shop->shop_area) && count($shop->shop_area)) {

            foreach ($shop->shop_area as $shop_area) {
                if ($selected_area_id == 0 || $selected_area_id == $shop_area->area_id) {
                    $selected_area_id = $shop_area->area_id;
                    $selected_area = $shop_area;
                }
                $shopAreaList[$shop_area->area_id] = $shop_area->area->{'name_' . config('app.locale')};
            }

        } else {
            $shopAreaList[$shop->area_id] = $shop->area->{'name_' . config('app.locale')};

        }

        $mostSellingCoffeees = $rShop->getMostSellingCoffeees($shop->id);

        return view('website.shop.show',
            compact('request', 'shop', 'shopAreaList', 'selected_area', 'mostSellingCoffeees'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy($id)
    {

    }


}
