<?php

namespace App\Http\Controllers\admin\operation_hour;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\operation_hour\createRequest;
use App\Http\Requests\admin\operation_hour\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\OperationHour as mOperationHour;
use App\Repositories\admin\operation_hour\OperationHourContract as rOperationHour;

 use App\Repositories\admin\shop_area\ShopAreaContract as rShopArea;
 use App\Repositories\admin\shop\ShopContract as rShop;

class OperationHour extends Controller
{
    private $rOperationHour;

    public function __construct(rOperationHour $rOperationHour)
    {
        $this->rOperationHour=$rOperationHour;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rOperationHour->getByFilter($request);

        return view('admin.operation_hour.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShopArea $rShopArea,rShop $rShop)
    {

$shopAreaList=$rShopArea->getAllList();
$shopList=$rShop->getAllList();

        return view('admin.operation_hour.create',compact('request','shopAreaList','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rOperationHour->create($request->all());

        return redirect('admin/operation_hour');
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


        $operation_hour=$this->rOperationHour->show($id);
      $request->merge(['operation_hour_id'=>$id,'page_name'=>'page']);



        return view('admin.operation_hour.show', compact('operation_hour','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShopArea $rShopArea,rShop $rShop)
    {


        $operation_hour=$this->rOperationHour->show($id);


 $shopAreaList=$rShopArea->getAllList();
 $shopList=$rShop->getAllList();
        return view('admin.operation_hour.edit', compact('operation_hour','shopAreaList','shopList'));
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

        $result=$this->rOperationHour->update($id,$request);

        return redirect('admin/operation_hour');
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
        $operation_hour=$this->rOperationHour->destroy($id);
        return redirect('admin/operation_hour');
    }


}
