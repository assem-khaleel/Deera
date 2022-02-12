<?php
namespace App\Repositories\website\shop_users;

use Session;
use App\Models\ShopUsers;
use App\Repositories\website\shop_users\ShopUsersContract;

class EloquentShopUsersRepository implements ShopUsersContract
{

    public function getByFilter($data)
    {

        $oResults = new ShopUsers();

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $oResults = $oResults->where('type', '=' , $data['type']);
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

          $oResults = new ShopUsers();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = ShopUsers::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop_users added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$shop_users = ShopUsers::findOrFail($id);

        return $shop_users;
    }

    public function destroy($id)
    {

        $result =  ShopUsers::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop_users deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$shop_users = ShopUsers::findOrFail($id);
       $result= $shop_users->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'shop_users updated!');
            return true;
        } else {
            return false;
        }

    }

}
