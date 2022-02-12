<?php
namespace App\Repositories\admin\order_driver;

use Session;
use App\Models\OrderDriver;
use App\Repositories\admin\order_driver\OrderDriverContract;

class EloquentOrderDriverRepository implements OrderDriverContract
{

    public function getByFilter($data)
    {

        $oResults = new OrderDriver();


        if(canAccess('admin.order.allData')){

        }elseif(canAccess('admin.order.groupData')){
            $oResults = $oResults->whereIn('order_id', current_user()->getShopOrder());
        }elseif(canAccess('admin.order.userData')){
            $oResults= $oResults::where('users_id','=',current_user()->getUser()->id);
        }



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['order_id']) && !empty($data['order_id'])) {
            $oResults = $oResults->where('order_id', '=' , $data['order_id']);
        }
        if (isset($data['current_long']) && !empty($data['current_long'])) {
            $oResults = $oResults->where('current_long', '=' , $data['current_long']);
        }
        if (isset($data['current_lat']) && !empty($data['current_lat'])) {
            $oResults = $oResults->where('current_lat', '=' , $data['current_lat']);
        }
        if (isset($data['status']) &&  $data['status']!=='') {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['note']) && !empty($data['note'])) {
            $oResults = $oResults->where('note', 'like' , '%'.$data['note'].'%');
        }
        if (isset($data['notification']) &&  $data['notification']!=='') {
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

          $oResults = new OrderDriver();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Add Order to driver','description'=>json_encode($data)]);

        $result = OrderDriver::create($data);

        if ($result) {
            Session::flash('flash_message', 'order_driver added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$order_driver = OrderDriver::findOrFail($id);

        OrderDriver::find($id)->update(['notification'=>1]);
        return $order_driver;
    }

    public function destroy($id)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Delete Order Driver','description'=>json_encode($this->show($id))]);
        $result =  OrderDriver::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'order_driver deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Update Order Driver','description'=>json_encode(is_array($data)? $data:$data->all())]);

$order_driver = OrderDriver::findOrFail($id);
       $result= $order_driver->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'order_driver updated!');
            return true;
        } else {
            return false;
        }

    }

}
