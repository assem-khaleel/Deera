<?php
namespace App\Repositories\website\cart;

use Session;
use App\Models\Cart;
use App\Models\Order;
use App\Repositories\website\cart\CartContract;

class EloquentCartRepository implements CartContract
{

    public function getByFilter($data)
    {


        $oResults = new Cart();

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

        $result = Cart::create($data);

        if ($result) {
           // Session::flash('flash_message', 'cart added!');
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


        $cart = Cart::findOrFail($id);

        $result =  Cart::destroy($id);

        if ($result) {
           // Session::flash('flash_message', 'cart deleted!');
            $otherCart=Cart::where('order_id','=',$cart->order_id)->count();
            if($otherCart ==0){
                Order::destroy($cart->order_id);
            }
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cart = Cart::findOrFail($id);
       $result= $cart->update(is_array($data)? $data:$data->all());
        if ($result) {
           // Session::flash('flash_message', 'cart updated!');
            return true;
        } else {
            return false;
        }

    }

    public function cartNumber(){

        $cartNumber=Cart::join('order','order.id','=','cart.order_id')->where([
            'order.users_id'=>current_user()->getUser()->id,
                'order.status'=>config('array.order_status_pending_index')
        ])
            ->where('parent_id','=',0)->sum('quantity');
        return $cartNumber;
    }

}
