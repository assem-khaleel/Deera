<?php
namespace App\Repositories\admin\operation_hour;

use Session;
use App\Models\OperationHour;
use App\Repositories\admin\operation_hour\OperationHourContract;

class EloquentOperationHourRepository implements OperationHourContract
{

    public function getByFilter($data)
    {

        $oResults = new OperationHour();


        if(canAccess('admin.operation_hour.allData')) {

        }elseif(canAccess('admin.operation_hour.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.operation_hour.userData')){

        }else{return;}


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['shop_area_id']) && !empty($data['shop_area_id'])) {
            $oResults = $oResults->where('shop_area_id', '=' , $data['shop_area_id']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['day']) && !empty($data['day'])) {
            $oResults = $oResults->where('day', '=' , $data['day']);
        }
        if (isset($data['shift1_from']) && !empty($data['shift1_from'])) {
            $oResults = $oResults->where('shift1_from', '=' , $data['shift1_from']);
        }
        if (isset($data['shift1_to']) && !empty($data['shift1_to'])) {
            $oResults = $oResults->where('shift1_to', '=' , $data['shift1_to']);
        }
        if (isset($data['shift2_from']) && !empty($data['shift2_from'])) {
            $oResults = $oResults->where('shift2_from', '=' , $data['shift2_from']);
        }
        if (isset($data['shift2_to']) && !empty($data['shift2_to'])) {
            $oResults = $oResults->where('shift2_to', '=' , $data['shift2_to']);
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

          $oResults = new OperationHour();


        if(canAccess('admin.operation_hour.allData')) {

        }elseif(canAccess('admin.operation_hour.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.operation_hour.userData')){

        }else{return;}

        $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = OperationHour::create($data);

        if ($result) {
            Session::flash('flash_message', 'operation_hour added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$operation_hour = OperationHour::findOrFail($id);

        return $operation_hour;
    }

    public function destroy($id)
    {

        $result =  OperationHour::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'operation_hour deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$operation_hour = OperationHour::findOrFail($id);
       $result= $operation_hour->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'operation_hour updated!');
            return true;
        } else {
            return false;
        }

    }

}
