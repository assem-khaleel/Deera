<?php
namespace App\Repositories\website\gift_card_users;

use Session;
use App\Models\GiftCardUsers;
use App\Repositories\website\gift_card_users\GiftCardUsersContract;

class EloquentGiftCardUsersRepository implements GiftCardUsersContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new GiftCardUsers();



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['sender_id']) && !empty($data['sender_id'])) {
            $oResults = $oResults->where('sender_id', '=' , $data['sender_id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['gift_card_id']) && !empty($data['gift_card_id'])) {
            $oResults = $oResults->where('gift_card_id', '=' , $data['gift_card_id']);
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('price', '=' , $data['price']);
        }
        if (isset($data['hash']) && !empty($data['hash'])) {
            $oResults = $oResults->where('hash', '=' , $data['hash']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $data['status']=is_array($data['status'])? $data['status']:[$data['status']];
            $oResults = $oResults->whereIn('status',  $data['status']);
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

          $oResults = new GiftCardUsers();

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

        $result = GiftCardUsers::create($data);

        if ($result) {
            Session::flash('flash_message', 'gift_card_users added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id,$data=[])
    {
        $gift_card_users=[];
if(isset($data['hash'])){
    $gift_card_users=GiftCardUsers::where(['hash'=>$data['hash']])->first();
}else{
$gift_card_users = GiftCardUsers::findOrFail($id);
}
        return $gift_card_users;
    }

    public function destroy($id)
    {

        $result =  GiftCardUsers::destroy($id);

        if ($result) {
        //    Session::flash('flash_message', 'gift_card_users deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$gift_card_users = GiftCardUsers::findOrFail($id);
       $result= $gift_card_users->update(is_array($data)? $data:$data->all());
        if ($result) {
           // Session::flash('flash_message', 'gift_card_users updated!');
            return true;
        } else {
            return false;
        }

    }

}
