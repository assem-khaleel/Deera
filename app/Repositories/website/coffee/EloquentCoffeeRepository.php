<?php
namespace App\Repositories\website\coffee;

use Session;
use App\Models\Coffee;
use App\Models\Offer;
use App\Repositories\website\coffee\CoffeeContract;

class EloquentCoffeeRepository implements CoffeeContract
{

    public function getByFilter($data)
    {

        $oResults = new Coffee();



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('name_en', '=' , $data['name_en']);
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('name_ar', '=' , $data['name_ar']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['cuisine_id']) && !empty($data['cuisine_id'])) {
            $oResults = $oResults->where('cuisine_id', '=' , $data['cuisine_id']);
        }
        if (isset($data['menu_section']) && !empty($data['menu_section'])) {

            if($data['menu_section'] =='offer'){
               $offerIdsArray= Offer::lists('coffee_id','coffee_id');
                $oResults = $oResults->whereIn('id',$offerIdsArray);
            }else{

                $oResults = $oResults->where('menu_section_id', '=' , $data['menu_section']);
            }
        }
        if (isset($data['category_id']) && !empty($data['category_id'])) {
            $oResults = $oResults->where('category_id', '=' , $data['category_id']);
        }
        if (isset($data['delivery_menu_id']) && !empty($data['delivery_menu_id'])) {
            $oResults = $oResults->where('delivery_menu_id', '=' , $data['delivery_menu_id']);
        }
        if (isset($data['parent_id']) && !empty($data['parent_id'])) {
            $oResults = $oResults->where('parent_id', '=' , $data['parent_id']);
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('price', '=' , $data['price']);
        }
        if (isset($data['quantity']) && !empty($data['quantity'])) {
            $oResults = $oResults->where('quantity', '=' , $data['quantity']);
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('img', '=' , $data['img']);
        }
        if (isset($data['discount']) && !empty($data['discount'])) {
            $oResults = $oResults->where('discount', '=' , $data['discount']);
        }
        if (isset($data['available_from']) && !empty($data['available_from'])) {
            $oResults = $oResults->where('available_from', '=' , $data['available_from']);
        }
        if (isset($data['available_to']) && !empty($data['available_to'])) {
            $oResults = $oResults->where('available_to', '=' , $data['available_to']);
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('description_en', '=' , $data['description_en']);
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('description_ar', '=' , $data['description_ar']);
        }
        if (isset($data['status']) && $data['status']!=='') {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', '=' , $data['updated_at']);
        }
        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
        }


        if(isset($data['getAllRecords']) && !empty($data['getAllRecords'])){
             $oResults = $oResults->get();
        }
        elseif (isset($data['page_name']) && !empty($data['page_name'])) {
             $oResults = $oResults->paginate(config('deera.pagination_size'), ['*'], $data['page_name']);
        }else{
             $oResults = $oResults->paginate(config('deera.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList($data=[]){

          $oResults = new Coffee();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = Coffee::create($data);

        if ($result) {
            Session::flash('flash_message', 'coffee added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$coffee = Coffee::findOrFail($id);

        return $coffee;
    }

    public function destroy($id)
    {

        $result =  Coffee::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'coffee deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$coffee = Coffee::findOrFail($id);
       $result= $coffee->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'coffee updated!');
            return true;
        } else {
            return false;
        }

    }


    function getMostSellingCoffee($data=[])
    {


        $oResults = \Illuminate\Support\Facades\DB::table('coffee')
            ->join('cart', 'cart.coffee_id','=','coffee.id')
            ->join('shop', 'shop.id','=','coffee.shop_id')
            ->select(['coffee.*','shop.name_en as shop_name_en','shop.name_ar as shop_name_ar',\Illuminate\Support\Facades\DB::raw('count(cart.coffee_id) as orderNumber')])
            ->groupBy('cart.coffee_id')->orderBy('orderNumber','desc');


            $oResults = $oResults->orderBy('coffee.id', 'desc');



        if(isset($data['getAllRecords']) && !empty($data['getAllRecords'])){
            $oResults = $oResults->get();
        }
        elseif (isset($data['page_name']) && !empty($data['page_name'])) {
            $oResults = $oResults->paginate(config('deera.pagination_size'), ['*'], $data['page_name']);
        }else{
            $oResults = $oResults->paginate(config('deera.pagination_size'));
        }


        return $oResults;
    }

}
