<?php

namespace App\Http\Controllers\admin\coffee;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\coffee\createRequest;
use App\Http\Requests\admin\coffee\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Coffee as mCoffee;
use App\Repositories\admin\coffee\CoffeeContract as rCoffee;

 use App\Repositories\admin\shop\ShopContract as rShop;
 use App\Repositories\admin\cuisine\CuisineContract as rCuisine;
 use App\Repositories\admin\menu_section\MenuSectionContract as rMenuSection;
 use App\Repositories\admin\category\CategoryContract as rCategory;
 use App\Repositories\admin\delivery_menu\DeliveryMenuContract as rDeliveryMenu;
 use App\Repositories\admin\cart\CartContract as rCart;

class Coffee extends Controller
{
    private $rCoffee;
private  $rShop;
    public function __construct(rCoffee $rCoffee,rShop $rShop)
    {
        $this->rCoffee=$rCoffee;
        $this->rShop=$rShop;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
//        \Event::listen('illuminate.query', function($query)
//{
//    print_r($query);
//    echo '<br><br><br>
//';
//});


        $this->rCoffee->exportExcel($request);

        $oResults=$this->rCoffee->getByFilter($request);
//        dd($oResults);
$shopList=$this->rShop->getAllList();


        return view('admin.coffee.index', compact('oResults','request','shopList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShop $rShop,rCuisine $rCuisine,rMenuSection $rMenuSection,rCategory $rCategory,rDeliveryMenu $rDeliveryMenu)
    {

$shopList=$rShop->getAllList();
$cuisineList=$rCuisine->getAllList();
$menuSectionList=$rMenuSection->getAllList();
$categoryList=$rCategory->getAllList();
$deliveryMenuList=$rDeliveryMenu->getAllList();

        return view('admin.coffee.create',compact('request','shopList','cuisineList','menuSectionList','categoryList','deliveryMenuList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCoffee->create($request->all());

        return redirect('admin/coffee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCart $rCart)
    {


        $coffee=$this->rCoffee->show($id);
      $request->merge(['coffee_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cart';
    $oCartResults=$rCart->getByFilter($request);

        return view('admin.coffee.show', compact('coffee','request','oCartResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShop $rShop,rCuisine $rCuisine,rMenuSection $rMenuSection,rCategory $rCategory,rDeliveryMenu $rDeliveryMenu)
    {


        $coffee=$this->rCoffee->show($id);


 $shopList=$rShop->getAllList();
 $cuisineList=$rCuisine->getAllList();
 $menuSectionList=$rMenuSection->getAllList();
 $categoryList=$rCategory->getAllList();
 $deliveryMenuList=$rDeliveryMenu->getAllList();
        return view('admin.coffee.edit', compact('coffee','shopList','cuisineList','menuSectionList','categoryList','deliveryMenuList'));
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

        $result=$this->rCoffee->update($id,$request);

        return redirect('admin/coffee');
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
        $coffee=$this->rCoffee->destroy($id);
        return redirect('admin/coffee');
    }


}
