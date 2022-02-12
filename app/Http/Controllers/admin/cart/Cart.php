<?php

namespace App\Http\Controllers\admin\cart;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cart\createRequest;
use App\Http\Requests\admin\cart\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Cart as mCart;
use App\Repositories\admin\cart\CartContract as rCart;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\shop\ShopContract as rShop;
 use App\Repositories\admin\coffee\CoffeeContract as rCoffee;
use App\Repositories\admin\order\OrderContract as rOrder;
use App\Repositories\admin\product_option\ProductOptionContract as rProductOption;

class Cart extends Controller
{
    private $rCart;

    public function __construct(rCart $rCart)
    {
        $this->rCart=$rCart;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCart->getByFilter($request);

        return view('admin.cart.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rShop $rShop,rCoffee $rCoffee,rOrder $rOrder)
    {

$usersList=$rUsers->getAllList();
$shopList=$rShop->getAllList();
$coffeeList=$rCoffee->getAllList();
$orderList=$rOrder->getAllList();

        return view('admin.cart.create',compact('request','usersList','shopList','coffeeList','orderList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCart->create($request->all());

        return redirect('admin/cart');
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


        $cart=$this->rCart->show($id);
      $request->merge(['cart_id'=>$id,'page_name'=>'page']);



        return view('admin.cart.show', compact('cart','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rShop $rShop,rCoffee $rCoffee,rOrder $rOrder,rProductOption $rProductOption)
    {


        $cart=$this->rCart->show($id);


 $usersList=$rUsers->getAllList();
 $shopList=$rShop->getAllList();
 $coffeeList=$rCoffee->getAllList();
 $orderList=$rOrder->getAllList();

        $sizeList=$rProductOption->getAllList(['option'=>config('array.product_option_option_size_index'),'coffee_id'=>$cart->coffee_id]);

        return view('admin.cart.edit', compact('cart','usersList','shopList','coffeeList','orderList','sizeList'));
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

        $result=$this->rCart->update($id,$request);

        return redirect('admin/cart');
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
        $cart=$this->rCart->destroy($id);
        return redirect('admin/cart');
    }


}
