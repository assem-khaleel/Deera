<?php

namespace App\Http\Controllers\website\catering;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\catering\createRequest;
use App\Http\Requests\website\catering\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Catering as mCatering;
use App\Repositories\website\catering\CateringContract as rCatering;

use App\Repositories\website\shop\ShopContract as rShop;
use App\Repositories\website\area\AreaContract as rArea;

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
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rCatering->getByFilter($request,$statistic);

        return view('website.catering.index', compact('oResults','request','statistic'));
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

        return view('website.catering.create',compact('request','shopList','areaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCatering->create($request->all());




        \Mail::send('website.catering.email', ['request'=>$request], function($message) use($request)
        {

            $message->from('info@cofedistrict.com', 'Cofe District  - Catering');


            $message->to($request->email)->subject('Cofe District - Catering Request');
            $message->cc('info@cofedistrict.com');


        });


        return redirect('/catering/create?status=success');
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



        return view('website.catering.show', compact('catering','request'));
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


        $catering=$this->rCatering->show($id);


 $shopList=$rShop->getAllList();
        return view('website.catering.edit', compact('catering','shopList'));
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

        return redirect('website/catering');
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
        return redirect('website/catering');
    }


}
