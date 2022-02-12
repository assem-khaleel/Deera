<?php
namespace App\Repositories\website\shop_rate;

use Session;
use App\Models\ShopRate;
use App\Repositories\website\shop_rate\ShopRateContract;

class EloquentShopRateRepository implements ShopRateContract
{

    public function getByFilter($data)
    {

        $oResults = new ShopRate();

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['rate']) && !empty($data['rate'])) {
            $oResults = $oResults->where('rate', '=' , $data['rate']);
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', '=' , $data['description']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['notification']) && !empty($data['notification'])) {
            $oResults = $oResults->where('notification', '=' , $data['notification']);
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

          $oResults = new ShopRate();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = ShopRate::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop_rate added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$shop_rate = ShopRate::findOrFail($id);

        return $shop_rate;
    }

    public function destroy($id)
    {

        $result =  ShopRate::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop_rate deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$shop_rate = ShopRate::findOrFail($id);
       $result= $shop_rate->update(is_array($data)?$data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'shop_rate updated!');
            return true;
        } else {
            return false;
        }

    }

}
