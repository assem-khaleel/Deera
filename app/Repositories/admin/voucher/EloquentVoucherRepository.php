<?php
namespace App\Repositories\admin\voucher;

use Session;
use App\Models\Voucher;
use App\Repositories\admin\voucher\VoucherContract;

class EloquentVoucherRepository implements VoucherContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Voucher();


if(canAccess('admin.voucher.allData')) {

}elseif(canAccess('admin.voucher.groupData')){
$oResults = $oResults->where('voucher.users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.voucher.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('voucher.id', '=' , $data['id']);
        }
        if (isset($data['code']) && !empty($data['code'])) {
            $oResults = $oResults->where('voucher.code', '=' , $data['code']);
        }
        if (isset($data['type']) && !empty($data['type'])) {
            $oResults = $oResults->where('voucher.type', '=' , $data['type']);
        }
        if (isset($data['amount']) && !empty($data['amount'])) {
            $oResults = $oResults->where('voucher.amount', '=' , $data['amount']);
        }
        if (isset($data['current_amount']) && !empty($data['current_amount'])) {
            $oResults = $oResults->where('voucher.current_amount', '=' , $data['current_amount']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('voucher.status', '=' , $data['status']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('voucher.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('voucher.updated_at', '=' , $data['updated_at']);
        }


if ($statistic !== null) {
$statistic = $this->getStatistic(clone $oResults);
}

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('voucher.'.$data['order'], $sort);
        }else{
$oResults = $oResults->orderBy('voucher.id', 'desc');
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

          $oResults = new Voucher();

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

        $result = Voucher::create($data);

        if ($result) {
            Session::flash('flash_message', 'voucher added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$voucher = Voucher::find($id);
if($voucher){
        return $voucher;
}else {return false;}
    }

    public function destroy($id)
    {

        $result =  Voucher::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'voucher deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$voucher = Voucher::findOrFail($id);
       $result= $voucher->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'voucher updated!');
            return true;
        } else {
            return false;
        }

    }

}
