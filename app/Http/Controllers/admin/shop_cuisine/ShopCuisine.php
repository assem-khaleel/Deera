<?php

namespace App\Http\Controllers\admin\shop_cuisine;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\shop_cuisine\createRequest;
use App\Http\Requests\admin\shop_cuisine\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ShopCuisine as mShopCuisine;
use App\Repositories\admin\shop_cuisine\ShopCuisineContract as rShopCuisine;

 use App\Repositories\admin\shop\ShopContract as rShop;
 use App\Repositories\admin\cuisine\CuisineContract as rCuisine;

class ShopCuisine extends Controller
{
    private $rShopCuisine;

    public function __construct(rShopCuisine $rShopCuisine)
    {
        $this->rShopCuisine=$rShopCuisine;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rShopCuisine->getByFilter($request);

        return view('admin.shop_cuisine.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShop $rShop,rCuisine $rCuisine)
    {

$shopList=$rShop->getAllList();
$cuisineList=$rCuisine->getAllList();

        return view('admin.shop_cuisine.create',compact('request','shopList','cuisineList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rShopCuisine->create($request->all());

        return redirect('admin/shop_cuisine');
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


        $shop_cuisine=$this->rShopCuisine->show($id);
      $request->merge(['shop_cuisine_id'=>$id,'page_name'=>'page']);



        return view('admin.shop_cuisine.show', compact('shop_cuisine','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShop $rShop,rCuisine $rCuisine)
    {


        $shop_cuisine=$this->rShopCuisine->show($id);


 $shopList=$rShop->getAllList();
 $cuisineList=$rCuisine->getAllList();
        return view('admin.shop_cuisine.edit', compact('shop_cuisine','shopList','cuisineList'));
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

        $result=$this->rShopCuisine->update($id,$request);

        return redirect('admin/shop_cuisine');
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
        $shop_cuisine=$this->rShopCuisine->destroy($id);
        return redirect('admin/shop_cuisine');
    }


}
