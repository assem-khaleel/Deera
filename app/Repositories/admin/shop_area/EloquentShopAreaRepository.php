<?php
namespace App\Repositories\admin\shop_area;

use Session;
use App\Models\ShopArea;
use App\Repositories\admin\shop_area\ShopAreaContract;

class EloquentShopAreaRepository implements ShopAreaContract
{

    public function getByFilter($data)
    {

        $oResults = new ShopArea();

        if(canAccess('admin.shop.allData')) {

        }elseif(canAccess('admin.shop.groupData')){
            $oResults = $oResults->whereIn('shop_id',  current_user()->getShop());
        }elseif(canAccess('admin.shop.userData')){

        }else{return;}


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['area_id']) && !empty($data['area_id'])) {
            $oResults = $oResults->where('area_id', '=' , $data['area_id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['delivery_charges']) && !empty($data['delivery_charges'])) {
            $oResults = $oResults->where('delivery_charges', '=' , $data['delivery_charges']);
        }
        if (isset($data['deera_charge']) && !empty($data['deera_charge'])) {
            $oResults = $oResults->where('deera_charge', '=' , $data['deera_charge']);
        }
        if (isset($data['min_amount']) && !empty($data['min_amount'])) {
            $oResults = $oResults->where('min_amount', '=' , $data['min_amount']);
        }
        if (isset($data['deliver_time_from']) && !empty($data['deliver_time_from'])) {
            $oResults = $oResults->where('deliver_time_from', '=' , $data['deliver_time_from']);
        }
        if (isset($data['deliver_time_to']) && !empty($data['deliver_time_to'])) {
            $oResults = $oResults->where('deliver_time_to', '=' , $data['deliver_time_to']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['governorate_id']) && !empty($data['governorate_id'])) {
            $oResults = $oResults->where('governorate_id', '=' , $data['governorate_id']);
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
        }else{
            $oResults = $oResults->orderBy('updated_at', 'desc');
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

          $oResults = new ShopArea();


        if(canAccess('admin.shop.allData')) {

        }elseif(canAccess('admin.shop.groupData')){
            $oResults = $oResults->whereIn('shop_id',  current_user()->getShop());
        }elseif(canAccess('admin.shop.userData')){

        }else{return;}


        $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->area->name_en;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = ShopArea::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop_area added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$shop_area = ShopArea::findOrFail($id);

        return $shop_area;
    }

    public function destroy($id)
    {

        $result =  ShopArea::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop_area deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$shop_area = ShopArea::findOrFail($id);
       $result= $shop_area->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'shop_area updated!');
            return true;
        } else {
            return false;
        }

    }

}
