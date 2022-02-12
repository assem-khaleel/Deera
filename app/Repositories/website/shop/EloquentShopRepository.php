<?php
namespace App\Repositories\website\shop;

use Session;
use App\Models\Shop;
use App\Models\ShopCuisine as mShopCuisine;
use App\Models\ShopArea as mShopArea;
use App\Repositories\website\shop\ShopContract;

class EloquentShopRepository implements ShopContract
{


    public function getByFilter($data)
    {

        $oResults = new Shop();

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('shop.id', '=' , $data['id']);
        }



        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('shop.name_en', 'like' , '%'.$data['name_en'].'%');
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('shop.name_ar', 'like' , '%'.$data['name_ar'].'%');
        }
        if (isset($data['deliver_type']) && !empty($data['deliver_type'])) {
            $oResults = $oResults->whereIn('shop.deliver_type', [config('array.shop_deliver_type_both_index'),$data['deliver_type']]);
        }
        if (isset($data['Owner_first_name']) && !empty($data['Owner_first_name'])) {
            $oResults = $oResults->where('shop.Owner_first_name', '=' , $data['Owner_first_name']);
        }
        if (isset($data['Owner_last_name']) && !empty($data['Owner_last_name'])) {
            $oResults = $oResults->where('shop.Owner_last_name', '=' , $data['Owner_last_name']);
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $oResults = $oResults->where('shop.email', 'like' , '%'.$data['email'].'%');
        }
        if (isset($data['available_payment']) && !empty($data['available_payment'])) {
            $oResults = $oResults->where('shop.available_payment', '=' , $data['available_payment']);
        }
        if (isset($data['telephone']) && !empty($data['telephone'])) {
            $oResults = $oResults->where('telephone', '=' , $data['telephone']);
        }

        $oResults = $oResults->where('shop.status', '!=' ,config('array.shop_status_pending_index'));
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['min_amount']) && !empty($data['min_amount'])) {
            $oResults = $oResults->where('min_amount', '=' , $data['min_amount']);
        }
        if (isset($data['working_hour_from']) && !empty($data['working_hour_from'])) {
            $oResults = $oResults->where('working_hour_from', '=' , $data['working_hour_from']);
        }
        if (isset($data['working_hour_to']) && !empty($data['working_hour_to'])) {
            $oResults = $oResults->where('working_hour_to', '=' , $data['working_hour_to']);
        }
        if (isset($data['deliver_time_from']) && !empty($data['deliver_time_from'])) {
            $oResults = $oResults->where('deliver_time_from', '=' , $data['deliver_time_from']);
        }
        if (isset($data['deliver_time_to']) && !empty($data['deliver_time_to'])) {
            $oResults = $oResults->where('deliver_time_to', '=' , $data['deliver_time_to']);
        }
        if (isset($data['deliver_charge']) && !empty($data['deliver_charge'])) {
            $oResults = $oResults->where('deliver_charge', '=' , $data['deliver_charge']);
        }
        if (isset($data['rating']) && !empty($data['rating'])) {
            $oResults = $oResults->where('rating', '=' , $data['rating']);
        }
        if (isset($data['show_menu']) && !empty($data['show_menu'])) {
            $oResults = $oResults->where('show_menu', '=' , $data['show_menu']);
        }
        if (isset($data['order_accept_days']) && !empty($data['order_accept_days'])) {
            $oResults = $oResults->where('order_accept_days', '=' , $data['order_accept_days']);
        }
        if (isset($data['offline_order']) && !empty($data['offline_order'])) {
            $oResults = $oResults->where('offline_order', '=' , $data['offline_order']);
        }
        if (isset($data['url']) && !empty($data['url'])) {
            $oResults = $oResults->where('url', '=' , $data['url']);
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('img', '=' , $data['img']);
        }
        if (isset($data['commission_type']) && !empty($data['commission_type'])) {
            $oResults = $oResults->where('commission_type', '=' , $data['commission_type']);
        }
        if (isset($data['discount_type']) && !empty($data['discount_type'])) {
            $oResults = $oResults->where('discount_type', '=' , $data['discount_type']);
        }
        if (isset($data['discount']) && !empty($data['discount'])) {
            $oResults = $oResults->where('discount', '=' , $data['discount']);
        }
        if (isset($data['area_id']) && !empty($data['area_id'])) {

            $oResults = $oResults->where(function($query) use ($data){

                $aShopIds=mShopArea::where('area_id',$data['area_id'])->lists('shop_id','shop_id');
                $query->whereIn('id',  $aShopIds);
                $query->orWhere('area_id', '=' , $data['area_id']);

            });
        }
        if (isset($data['cuisine_id']) && !empty($data['cuisine_id'])) {
            $aShopIds=mShopCuisine::where('cuisine_id',$data['cuisine_id'])->lists('shop_id','shop_id');
            $oResults = $oResults->whereIn('id',  $aShopIds);
        }
        if (isset($data['follow_us']) && !empty($data['follow_us'])) {
            $oResults = $oResults->where('follow_us', '=' , $data['follow_us']);
        }
        if (isset($data['notification']) && !empty($data['notification'])) {
            $oResults = $oResults->where('notification', '=' , $data['notification']);
        }
        if (isset($data['address_en']) && !empty($data['address_en'])) {
            $oResults = $oResults->where('address_en', '=' , $data['address_en']);
        }
        if (isset($data['address_ar']) && !empty($data['address_ar'])) {
            $oResults = $oResults->where('address_ar', '=' , $data['address_ar']);
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('description_en', '=' , $data['description_en']);
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('description_ar', '=' , $data['description_ar']);
        }
        if (isset($data['summary_en']) && !empty($data['summary_en'])) {
            $oResults = $oResults->where('summary_en', '=' , $data['summary_en']);
        }
        if (isset($data['summary_ar']) && !empty($data['summary_ar'])) {
            $oResults = $oResults->where('summary_ar', '=' , $data['summary_ar']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', '=' , $data['updated_at']);
        }



        /*_______________________________add__branches to search result*/


        if (isset($data['id']) && !empty($data['id'])) {
            $mainBranchsResult = clone $oResults;

            $mainBranchsIds = $mainBranchsResult->lists('id', 'id');
            $oResults = $oResults->orWhere(function ($query) use ($mainBranchsIds) {
                $query->whereIn('shop.branch', $mainBranchsIds);
            });
        }

        /*_____________________________END__add__branches to search result*/

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
        }else{
            $oResults = $oResults->orderBy('shop.created_at', 'desc');
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

          $oResults = new Shop();

        $oResults = $oResults->where('shop.status', '!=' ,config('array.shop_status_pending_index'));
        $oResults = $oResults->where('shop.branch', '=' ,0);

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name_en;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = Shop::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$shop = Shop::findOrFail($id);

        return $shop;
    }

    public function destroy($id)
    {

        $result =  Shop::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$shop = Shop::findOrFail($id);
       $result= $shop->update(is_array($data)?$data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'shop updated!');
            return true;
        } else {
            return false;
        }

    }


    public function getFooterPopularShopMenu()
    {

        $oShops = \Illuminate\Support\Facades\DB::table('shop')
            ->join('order', 'shop.id','=','order.shop_id')
            ->select(['shop.id','shop.name_'.config('app.locale'),\Illuminate\Support\Facades\DB::raw('count(shop.id) as orderNumber')])
            ->where('shop.status', '!=' ,config('array.shop_status_pending_index'))
            ->groupBy('order.shop_id')->orderBy('orderNumber','desc')->limit(5)->get();



        $shops=[];
        foreach($oShops as $oShop){
            $shops[$oShop->id]=$oShop->{'name_'.config('app.locale')};
        }
        return $shops;
    }

    public function getFooterPopularAreaMenu()
    {

        $oAreas = \Illuminate\Support\Facades\DB::table('area')
            ->join('order', 'area.id','=','order.area_id')
            ->select(['area.id','area.name_'.config('app.locale'),\Illuminate\Support\Facades\DB::raw('count(area.id) as orderNumber')])
            ->groupBy('order.area_id')->orderBy('orderNumber','desc')->limit(5)->get();



        $areas=[];
        foreach($oAreas as $oArea){
            $areas[$oArea->id]=$oArea->{'name_'.config('app.locale')};
        }
        return $areas;
    }


   public function getFooterPopularCuisineMenu()
    {

        $oCuisines = \Illuminate\Support\Facades\DB::table('cuisine')
            ->join('shop_cuisine', 'cuisine.id','=','shop_cuisine.cuisine_id')
            ->join('order', 'order.shop_id','=','shop_cuisine.shop_id')
            ->select(['cuisine.id','cuisine.name_'.config('app.locale'),\Illuminate\Support\Facades\DB::raw('count(cuisine.id) as orderNumber')])

       ->where('cuisine.status', '=' ,config('array.cuisine_status_show_index'))
            ->groupBy('order.shop_id')->orderBy('orderNumber','desc')->limit(5)->get();



        $cuisines=[];
        foreach($oCuisines as $oCuisine){
            $cuisines[$oCuisine->id]=$oCuisine->{'name_'.config('app.locale')};
        }
        return $cuisines;
    }

    public function getMostSellingCoffeees($restaurnat_id=0){

        $oCoffeees = \Illuminate\Support\Facades\DB::table('coffee')
            ->join('cart', 'cart.coffee_id','=','coffee.id')
            ->join('order', 'cart.order_id','=','order.id');

        if($restaurnat_id > 0){
            $oCoffeees=   $oCoffeees->where('order.shop_id','=',$restaurnat_id);
        }
        $oCoffeees=$oCoffeees->select(['coffee.id as coffee_id','coffee.name_'.config('app.locale'),\Illuminate\Support\Facades\DB::raw('sum(cart.quantity) as orderNumber')])
            ->groupBy('cart.coffee_id')->orderBy('orderNumber','desc')->limit(8)->get();


        $aCoffeees=[];
        foreach($oCoffeees as $oCoffee){
            $aCoffeees[$oCoffee->coffee_id]=$oCoffee->{'name_'.config('app.locale')};
        }
        return $aCoffeees;



    }
}
