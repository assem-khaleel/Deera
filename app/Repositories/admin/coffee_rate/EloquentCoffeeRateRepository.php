<?php
namespace App\Repositories\admin\coffee_rate;

use Session;
use App\Models\CoffeeRate;
use App\Repositories\admin\coffee_rate\CoffeeRateContract;

class EloquentCoffeeRateRepository implements CoffeeRateContract
{

    public function getByFilter($data)
    {

        $oResults = new CoffeeRate();




        if(canAccess('admin.coffee.allData')) {

        }elseif(canAccess('admin.coffee.groupData')){
            $oResults=$oResults->select('coffee_rate.*')->join('coffee','coffee_rate.coffee_id','=','coffee.id')
                ->whereIn('coffee.shop_id', current_user()->getShop());
        }elseif(canAccess('admin.coffee.userData')){

        }else{return;}


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['coffee_id']) && !empty($data['coffee_id'])) {
            $oResults = $oResults->where('coffee_id', '=' , $data['coffee_id']);
        }
        if (isset($data['rate']) && $data['rate'] !=='') {
            $oResults = $oResults->where('rate', '=' , $data['rate']);
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', 'like' , '%'.$data['description'].'%');
        }
        if (isset($data['status']) && $data['status']!=='') {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['notification']) && $data['notification']!=='') {
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

          $oResults = new CoffeeRate();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = CoffeeRate::create($data);

        if ($result) {
            Session::flash('flash_message', 'coffee_rate added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$coffee_rate = CoffeeRate::findOrFail($id);


        CoffeeRate::find($id)->update(['notification'=>1]);
        return $coffee_rate;
    }

    public function destroy($id)
    {

        $result =  CoffeeRate::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'coffee_rate deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$coffee_rate = CoffeeRate::findOrFail($id);
       $result= $coffee_rate->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'coffee_rate updated!');
            return true;
        } else {
            return false;
        }

    }

}
