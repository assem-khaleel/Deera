<?php

namespace App\Http\Controllers\admin\shop_users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\shop_users\createRequest;
use App\Http\Requests\admin\shop_users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ShopUsers as mShopUsers;
use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\shop\ShopContract as rShop;

class ShopUsers extends Controller
{
    private $rShopUsers;

    public function __construct(rShopUsers $rShopUsers)
    {
        $this->rShopUsers=$rShopUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rShopUsers->getByFilter($request);

        return view('admin.shop_users.index', compact('oResults','request'));
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

        return view('admin.shop_users.create',compact('request','usersList','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rShopUsers->create($request->all());

        return redirect('admin/shop_users');
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


        $shop_users=$this->rShopUsers->show($id);
      $request->merge(['shop_users_id'=>$id,'page_name'=>'page']);



        return view('admin.shop_users.show', compact('shop_users','request'));
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


        $shop_users=$this->rShopUsers->show($id);


 $usersList=$rUsers->getAllList();
 $shopList=$rShop->getAllList();
        return view('admin.shop_users.edit', compact('shop_users','usersList','shopList'));
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

        $result=$this->rShopUsers->update($id,$request);

        return redirect('admin/shop_users');
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
        $shop_users=$this->rShopUsers->destroy($id);
        return redirect('admin/shop_users');
    }


}
