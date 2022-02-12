<?php

namespace App\Http\Controllers\admin\catering;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\catering\createRequest;
use App\Http\Requests\admin\catering\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Catering as mCatering;
use App\Repositories\admin\catering\CateringContract as rCatering;

use App\Repositories\admin\shop\ShopContract as rShop;
use App\Repositories\admin\area\AreaContract as rArea;

class Catering extends Controller
{
    private $rCatering;

    public function __construct(rCatering $rCatering)
    {
        $this->rCatering=$rCatering;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request,rShop $rShop)
    {
            $this->rCatering->exportExcel($request);

             



        $statistic=null;
        $oResults=$this->rCatering->getByFilter($request,$statistic);

        $shopList=$rShop->getAllList();

        return view('admin.catering.index', compact('oResults','request','shopList','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShop $rShop,rArea $rArea)
    {

        $shopList=$rShop->getAllList();

        $areaList=$rArea->getAllList();

        return view('admin.catering.create',compact('request','shopList','areaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCatering->create($request->all());

        return redirect('admin/catering');
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


        $catering=$this->rCatering->show($id);
      $request->merge(['catering_id'=>$id,'page_name'=>'page']);



        return view('admin.catering.show', compact('catering','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShop $rShop,rArea $rArea)
    {


        $catering=$this->rCatering->show($id);

        $areaList=$rArea->getAllList();

 $shopList=$rShop->getAllList();
        return view('admin.catering.edit', compact('catering','shopList','areaList'));
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

        $result=$this->rCatering->update($id,$request);

        return redirect('admin/catering');
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
        $catering=$this->rCatering->destroy($id);
        return redirect('admin/catering');
    }


}
