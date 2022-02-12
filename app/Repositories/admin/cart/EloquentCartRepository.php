<?php
namespace App\Repositories\admin\cart;

use Session;
use App\Models\Cart;
use App\Repositories\admin\cart\CartContract;

class EloquentCartRepository implements CartContract
{

    public function getByFilter($data)
    {

        $oResults = Cart::with('coffee','size');


        if(canAccess('admin.cart.allData')) {

        }elseif(canAccess('admin.cart.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.cart.userData')){

        }else{return;}
        if(isset($data['period_type']) && !empty($data['period_type'])){
//            $day = date('w');
//            $week_start = date('Y-m-d', strtotime('-'.$day.' days'));

            $period_prefix=[
                ''=>'',
                'daily'=>gmdate('Y-m-d '),'monthly'=>gmdate('Y-m-'),'yearly'=>gmdate('Y-')];
            $oResults=$oResults->where('cart.created_at','like',$period_prefix[$data['period_type']].'%');
        }
        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['coffee_id']) && !empty($data['coffee_id'])) {
            $oResults = $oResults->where('coffee_id', '=' , $data['coffee_id']);
        }
        if (isset($data['order_id']) && !empty($data['order_id'])) {
            $oResults = $oResults->where('order_id', '=' , $data['order_id']);
        }
        if (isset($data['deliver_charge']) && !empty($data['deliver_charge'])) {
            $oResults = $oResults->where('deliver_charge', '=' , $data['deliver_charge']);
        }
        if (isset($data['quantity']) && !empty($data['quantity'])) {
            $oResults = $oResults->where('quantity', '=' , $data['quantity']);
        }
        if (isset($data['unit_price']) && !empty($data['unit_price'])) {
            $oResults = $oResults->where('unit_price', '=' , $data['unit_price']);
        }
        if (isset($data['total_price']) && !empty($data['total_price'])) {
            $oResults = $oResults->where('total_price', '=' , $data['total_price']);
        }
        if (isset($data['special_request']) && !empty($data['special_request'])) {
            $oResults = $oResults->where('special_request', '=' , $data['special_request']);
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



        $pagination_size=(isset($data['pagination_size']) && !empty($data['pagination_size']))?  $data['pagination_size']:config('project.pagination_size');

        if(isset($data['getAllRecords']) && !empty($data['getAllRecords'])){
            $oResults = $oResults->get();
        }elseif (isset($data['page_name']) && !empty($data['page_name'])) {
            $oResults = $oResults->paginate($pagination_size, ['*'], $data['page_name']);
        }else{
            $oResults = $oResults->paginate($pagination_size);
        }
        return $oResults;
    }

    public function getAllList($data=[]){

          $oResults = new Cart();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Add Cart','description'=>json_encode($data)]);
        $result = Cart::create($data);

        if ($result) {
            Session::flash('flash_message', 'cart added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cart = Cart::findOrFail($id);

        return $cart;
    }

    public function destroy($id)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Delete Cart','description'=>json_encode($this->show($id))]);
        $result =  Cart::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cart deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Update Cart','description'=>json_encode($data->all())]);
$cart = Cart::findOrFail($id);
       $result= $cart->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cart updated!');
            return true;
        } else {
            return false;
        }

    }

}
