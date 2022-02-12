<?php
namespace App\Repositories\website\shop_cuisine;

use Session;
use App\Models\ShopCuisine;
use App\Repositories\website\shop_cuisine\ShopCuisineContract;

class EloquentShopCuisineRepository implements ShopCuisineContract
{

    public function getByFilter($data)
    {

        $oResults = new ShopCuisine();

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['cuisine_id']) && !empty($data['cuisine_id'])) {
            $oResults = $oResults->where('cuisine_id', '=' , $data['cuisine_id']);
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

          $oResults = new ShopCuisine();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = ShopCuisine::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop_cuisine added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$shop_cuisine = ShopCuisine::findOrFail($id);

        return $shop_cuisine;
    }

    public function destroy($id)
    {

        $result =  ShopCuisine::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop_cuisine deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$shop_cuisine = ShopCuisine::findOrFail($id);
       $result= $shop_cuisine->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'shop_cuisine updated!');
            return true;
        } else {
            return false;
        }

    }

}
