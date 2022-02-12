<?php
namespace App\Repositories\admin\gift_card_order;

use Session;
use App\Models\GiftCardOrder;
use App\Repositories\admin\gift_card_order\GiftCardOrderContract;

class EloquentGiftCardOrderRepository implements GiftCardOrderContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new GiftCardOrder();


if(canAccess('admin.gift_card_order.allData')) {

}elseif(canAccess('admin.gift_card_order.groupData')){
$oResults = $oResults->where('users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.gift_card_order.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['order_id']) && !empty($data['order_id'])) {
            $oResults = $oResults->where('order_id', '=' , $data['order_id']);
        }
        if (isset($data['gift_card_id']) && !empty($data['gift_card_id'])) {
            $oResults = $oResults->where('gift_card_id', '=' , $data['gift_card_id']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }


if ($statistic !== null) {
$statistic = $this->getStatistic(clone $oResults);
}

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
        }else{
$oResults = $oResults->orderBy('id', 'desc');
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

          $oResults = new GiftCardOrder();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }


public function getStatistic($oResults)
{
$oTotalResults=clone $oResults;

$current_month = gmdate('Y-m');

$totalResults=$oTotalResults->count();
return ['total'=>$totalResults];
}


    public function create($data)
    {

        $result = GiftCardOrder::create($data);

        if ($result) {
            Session::flash('flash_message', 'gift_card_order added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$gift_card_order = GiftCardOrder::findOrFail($id);

        return $gift_card_order;
    }

    public function destroy($id)
    {

        $result =  GiftCardOrder::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'gift_card_order deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$gift_card_order = GiftCardOrder::findOrFail($id);
       $result= $gift_card_order->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'gift_card_order updated!');
            return true;
        } else {
            return false;
        }

    }

}
