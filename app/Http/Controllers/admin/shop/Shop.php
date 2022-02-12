<?php

namespace App\Http\Controllers\admin\shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\shop\createRequest;
use App\Http\Requests\admin\shop\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Shop as mShop;
use App\Repositories\admin\shop\ShopContract as rShop;

 use App\Repositories\admin\area\AreaContract as rArea;
 use App\Repositories\admin\category\CategoryContract as rCategory;
 use App\Repositories\admin\delivery_menu\DeliveryMenuContract as rDeliveryMenu;
 use App\Repositories\admin\shop_rate\ShopRateContract as rShopRate;
 use App\Repositories\admin\shop_cuisine\ShopCuisineContract as rShopCuisine;
 use App\Repositories\admin\menu_section\MenuSectionContract as rMenuSection;
 use App\Repositories\admin\coffee\CoffeeContract as rCoffee;
 use App\Repositories\admin\coffee_rate\CoffeeRateContract as rCoffeeRate;
 use App\Repositories\admin\shop_area\ShopAreaContract as rShopArea;
 use App\Repositories\admin\operation_hour\OperationHourContract as rOperationHour;
 use App\Repositories\admin\cart\CartContract as rCart;
 use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;

class Shop extends Controller
{
    private $rShop;

    public function __construct(rShop $rShop)
    {
        $this->rShop=$rShop;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $this->rShop->exportExcel($request);
        $oResults=$this->rShop->getByFilter($request);

        return view('admin.shop.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rArea $rArea)
    {

$areaList=$rArea->getAllList();
        $mainBranchList=$this->rShop->getAllList(['branch'=>0]);
        return view('admin.shop.create',compact('request','areaList','mainBranchList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest  $request)
    {


        $oResults=$this->rShop->create($request->all());

        if(isset($request->branch) && $request->branch > 0 && $oResults){
            $mainBranchId=$request->branch;
            $newBranchId=$oResults->id;
            $this->copyShopData($mainBranchId,$newBranchId);

        }
        return redirect('admin/shop');
    }


public function copyShopData($mainBranchId,$newBranchId){
    $mainBranch=$this->rShop->show($mainBranchId);
//    $newBranch=$this->rShop->show($newBranchId);

    /*__________________________menu_section______*/
    if(count($mainBranch->menu_section) ){
        foreach($mainBranch->menu_section as $menuSection){
            $oNewMenuSection=$this->copyRecord($menuSection,['shop_id'=>$newBranchId]);


            /*__________________________Coffee______*/
            if(count($menuSection->coffee)){
                foreach($menuSection->coffee as $coffee){
                    $oNewCoffee=$this->copyRecord($coffee,['shop_id'=>$newBranchId,'menu_section_id'=>$oNewMenuSection->id]);


                    /*__________________________size______*/
                    if(count($coffee->size)){
                        foreach($coffee->size as $size){
                            $oNewCoffeeSize=$this->copyRecord($coffee,['coffee_id'=>$oNewCoffee->id]);
                        }
                    }

                    /*_________________________End___size______*/


                }
            }

            /*_______________________End ____ Coffee______*/


        }
    }
    /*_____________________END_____menu_section______*/



}


    public function copyRecord($modelObject,$changedValue=[]){
        $denyCopy=['id','created_at','updated_at'];

        $insertedData=[];
        foreach($modelObject->getFillable() as $column){
            if(in_array($column,$denyCopy)){continue;}

            if(array_key_exists($column,$changedValue)){$insertedData[$column]=$changedValue[$column];}else{
                $insertedData[$column]=$modelObject->$column;
            }


        }

        $modelObject = $modelObject->create($insertedData);
        return $modelObject;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCategory $rCategory,rDeliveryMenu $rDeliveryMenu,rShopRate $rShopRate,rShopCuisine $rShopCuisine,rMenuSection $rMenuSection,rCoffee $rCoffee,rCoffeeRate $rCoffeeRate,rShopArea $rShopArea,rOperationHour $rOperationHour,rCart $rCart,rShopUsers $rShopUsers)
    {


        $shop=$this->rShop->show($id);
      $request->merge(['shop_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_category';
    $oCategoryResults=$rCategory->getByFilter($request);
    $request->page_name='page_delivery_menu';
    $oDeliveryMenuResults=$rDeliveryMenu->getByFilter($request);
    $request->page_name='page_shop_rate';
    $oShopRateResults=$rShopRate->getByFilter($request);
    $request->page_name='page_shop_cuisine';
    $oShopCuisineResults=$rShopCuisine->getByFilter($request);
    $request->page_name='page_menu_section';
    $oMenuSectionResults=$rMenuSection->getByFilter($request);
    $request->page_name='page_coffee';
    $oCoffeeResults=$rCoffee->getByFilter($request);
    $request->page_name='page_coffee_rate';
    $oCoffeeRateResults=$rCoffeeRate->getByFilter($request);
    $request->page_name='page_shop_area';
    $oShopAreaResults=$rShopArea->getByFilter($request);
    $request->page_name='page_operation_hour';
    $oOperationHourResults=$rOperationHour->getByFilter($request);
    $request->page_name='page_cart';
    $oCartResults=$rCart->getByFilter($request);
    $request->page_name='page_shop_users';
    $oShopUsersResults=$rShopUsers->getByFilter($request);

        return view('admin.shop.show', compact('shop','request','oCategoryResults','oDeliveryMenuResults','oShopRateResults','oShopCuisineResults','oMenuSectionResults','oCoffeeResults','oCoffeeRateResults','oShopAreaResults','oOperationHourResults','oCartResults','oShopUsersResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rArea $rArea)
    {


        $shop=$this->rShop->show($id);


 $areaList=$rArea->getAllList();
        $mainBranchList=$this->rShop->getAllList(['branch'=>0]);
        return view('admin.shop.edit', compact('shop','areaList','mainBranchList'));
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

        $result=$this->rShop->update($id,$request);

        return redirect('admin/shop');
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
        $shop=$this->rShop->destroy($id);
        return redirect('admin/shop');
    }


}
