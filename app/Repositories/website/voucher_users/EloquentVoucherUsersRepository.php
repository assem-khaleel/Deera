<?php
namespace App\Repositories\website\voucher_users;

use Session;
use App\Models\VoucherUsers;
use App\Repositories\website\voucher_users\VoucherUsersContract;

class EloquentVoucherUsersRepository implements VoucherUsersContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new VoucherUsers();


if(canAccess('admin.voucher_users.allData')) {

}elseif(canAccess('admin.voucher_users.groupData')){
$oResults = $oResults->where('voucher_users.users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.voucher_users.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('voucher_users.id', '=' , $data['id']);
        }
        if (isset($data['voucher_id']) && !empty($data['voucher_id'])) {
            $oResults = $oResults->where('voucher_users.voucher_id', '=' , $data['voucher_id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('voucher_users.users_id', '=' , $data['users_id']);
        }
        if (isset($data['order_id']) && !empty($data['order_id'])) {
            $oResults = $oResults->where('voucher_users.order_id', '=' , $data['order_id']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('voucher_users.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('voucher_users.updated_at', '=' , $data['updated_at']);
        }


if ($statistic !== null) {
$statistic = $this->getStatistic(clone $oResults);
}

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('voucher_users.'.$data['order'], $sort);
        }else{
$oResults = $oResults->orderBy('voucher_users.id', 'desc');
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

          $oResults = new VoucherUsers();

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

        $result = VoucherUsers::create($data);

        if ($result) {
            Session::flash('flash_message', 'voucher_users added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$voucher_users = VoucherUsers::findOrFail($id);

        return $voucher_users;
    }

    public function destroy($id)
    {

        $result =  VoucherUsers::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'voucher_users deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$voucher_users = VoucherUsers::findOrFail($id);
       $result= $voucher_users->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'voucher_users updated!');
            return true;
        } else {
            return false;
        }

    }

}
