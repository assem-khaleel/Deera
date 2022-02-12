<?php

namespace App\Http\Controllers\admin\shop_area;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\shop_area\createRequest;
use App\Http\Requests\admin\shop_area\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ShopArea as mShopArea;
use App\Repositories\admin\shop_area\ShopAreaContract as rShopArea;

 use App\Repositories\admin\area\AreaContract as rArea;
 use App\Repositories\admin\shop\ShopContract as rShop;
 use App\Repositories\admin\governorate\GovernorateContract as rGovernorate;
 use App\Repositories\admin\operation_hour\OperationHourContract as rOperationHour;

class ShopArea extends Controller
{
    private $rShopArea;

    public function __construct(rShopArea $rShopArea)
    {
        $this->rShopArea=$rShopArea;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rShopArea->getByFilter($request);

        return view('admin.shop_area.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rArea $rArea,rShop $rShop,rGovernorate $rGovernorate)
    {

$areaList=$rArea->getAllList();
$shopList=$rShop->getAllList();
$governorateList=$rGovernorate->getAllList();

        return view('admin.shop_area.create',compact('request','areaList','shopList','governorateList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rShopArea->create($request->all());

        return redirect('admin/shop_area');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rOperationHour $rOperationHour)
    {


        $shop_area=$this->rShopArea->show($id);
      $request->merge(['shop_area_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_operation_hour';
    $oOperationHourResults=$rOperationHour->getByFilter($request);

        return view('admin.shop_area.show', compact('shop_area','request','oOperationHourResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rArea $rArea,rShop $rShop,rGovernorate $rGovernorate)
    {


        $shop_area=$this->rShopArea->show($id);


 $areaList=$rArea->getAllList();
 $shopList=$rShop->getAllList();
 $governorateList=$rGovernorate->getAllList();
        return view('admin.shop_area.edit', compact('shop_area','areaList','shopList','governorateList'));
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

        $result=$this->rShopArea->update($id,$request);

        return redirect('admin/shop_area');
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
        $shop_area=$this->rShopArea->destroy($id);
        return redirect('admin/shop_area');
    }


}
