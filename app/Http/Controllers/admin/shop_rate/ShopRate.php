<?php

namespace App\Http\Controllers\admin\shop_rate;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\shop_rate\createRequest;
use App\Http\Requests\admin\shop_rate\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ShopRate as mShopRate;
use App\Repositories\admin\shop_rate\ShopRateContract as rShopRate;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\shop\ShopContract as rShop;

class ShopRate extends Controller
{
    private $rShopRate;

    public function __construct(rShopRate $rShopRate)
    {
        $this->rShopRate=$rShopRate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rShopRate->getByFilter($request);

        return view('admin.shop_rate.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rShop $rShop)
    {

$usersList=$rUsers->getAllList();
$shopList=$rShop->getAllList();

        return view('admin.shop_rate.create',compact('request','usersList','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rShopRate->create($request->all());

        return redirect('admin/shop_rate');
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


        $shop_rate=$this->rShopRate->show($id);
      $request->merge(['shop_rate_id'=>$id,'page_name'=>'page']);



        return view('admin.shop_rate.show', compact('shop_rate','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rShop $rShop)
    {


        $shop_rate=$this->rShopRate->show($id);


 $usersList=$rUsers->getAllList();
 $shopList=$rShop->getAllList();
        return view('admin.shop_rate.edit', compact('shop_rate','usersList','shopList'));
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

        $result=$this->rShopRate->update($id,$request);

        return redirect('admin/shop_rate');
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
        $shop_rate=$this->rShopRate->destroy($id);
        return redirect('admin/shop_rate');
    }


}
