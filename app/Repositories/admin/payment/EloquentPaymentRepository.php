<?php
namespace App\Repositories\admin\payment;

use Session;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Shop;
use App\Models\ShopUsers;

use App\Repositories\admin\payment\PaymentContract;
use Illuminate\Support\Facades\DB;

class EloquentPaymentRepository implements PaymentContract
{

    public function getByFilter($data, &$statistic = null)
    {

        $oResults = new Payment();


        if (canAccess('admin.payment.allData')) {

        } elseif (canAccess('admin.payment.groupData')) {
            $oResults = $oResults->whereIn('payment.order_id', current_user()->getShopOrder());
        } elseif (canAccess('admin.payment.userData')) {

        } else {
            return;
        }


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('payment.id', '=', $data['id']);
        }
        if (isset($data['order_id']) && !empty($data['order_id'])) {
            $oResults = $oResults->where('payment.order_id', '=', $data['order_id']);
        }

        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oOrders = Order::where('shop_id', '=', $data['shop_id'])->lists('id', 'id');
            $oResults = $oResults->whereIn('payment.order_id', $oOrders);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('payment.users_id', '=', $data['users_id']);
        }
        if (isset($data['amount']) && !empty($data['amount'])) {
            $oResults = $oResults->where('payment.amount', '=', $data['amount']);
        }
        if (isset($data['status']) && $data['status'] !== '') {
            $oResults = $oResults->where('payment.status', '=', $data['status']);
        }
        if (isset($data['type']) && $data['type'] !== '') {
            $oResults = $oResults->where('payment.type', '=', $data['type']);
        }
        if (isset($data['notification']) && $data['notification'] !== '') {
            $oResults = $oResults->where('payment.notification', '=', $data['notification']);
        }


        $oResults = $oResults->join('order','order.id', '=', 'payment.order_id');

        if (isset($data['area_id']) && $data['area_id'] !== '') {
            $oResults = $oResults->where('order.area_id','=',$data['area_id'])->select(['payment.*']);
        }


        $data['area_id']=0;
        $oResults = $oResults->where('order.status','!=',config('array.order_driver_status_pending_index')) ;


        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('payment.created_at', 'like', $data['created_at'].'-%');
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('payment.updated_at', '=', $data['updated_at']);
        }


        if (isset($data['period_type']) && !empty($data['period_type'])) {

            $period_prefix = [
                '' => '',
                'daily' => gmdate('Y-m-d '),
                'monthly' => gmdate('Y-m-'),
                'yearly' => gmdate('Y-')
            ];
            $oResults = $oResults->where('payment.created_at', 'like', $period_prefix[$data['period_type']] . '%');
        }
        if (isset($data['from_date']) && !empty($data['from_date'])) {
            $oResults = $oResults->where('payment.created_at', '>=', $data['from_date']);
        }

        if (isset($data['to_date']) && !empty($data['to_date'])) {
            $oResults = $oResults->where('payment.created_at', '<=', $data['to_date']);
        }

        if ($statistic !== null) {
            $statistic = $this->getStatistic(clone $oResults,$data);
        }

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
        } else {
            $oResults = $oResults->orderBy('payment.updated_at', 'desc');
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

    public function getStatistic($oResults,$data=[])
    {

        $oStatusResults=clone $oResults;
        $oDeeraChargeResults=clone $oResults;
       // $current_month = gmdate('Y-m-');

        $oStatusResults=$oStatusResults->select([DB::raw('count(payment.id) as number'),DB::raw('sum(payment.amount) as amount'),'payment.status']);
        $oStatusResults=$oStatusResults->groupby('payment.status')->get();

        $oDeeraChargeResults=(isset($data['area_id']) && $data['area_id'] !== '')?$oDeeraChargeResults: $oDeeraChargeResults->join('order','order.id','=','payment.order_id');
        $oDeeraChargeResults=$oDeeraChargeResults->select([DB::raw('sum(order.deera_charge) as deera_charge'),
            DB::raw('sum(order.deliver_charge) as deera_driver_charge')])
        ->groupBy('payment.status');

        $deeraDriverCharge=clone $oDeeraChargeResults;



        $oDeeraChargeResults=$oDeeraChargeResults->first();

        $aStatusResults=[];
        foreach($oStatusResults as $oStatusResult){

            $aStatusResults[$oStatusResult->status]=$oStatusResult;
        }


       // $deeraDriverCharge=$deeraDriverCharge->join('order_driver','order_driver.order_id','=','order.id')->whereIn('order_driver.users_id',$this->deeraDivers())->get();

        $deeraDriverCharge=$deeraDriverCharge->join('order_driver','order_driver.order_id','=','order.id')->whereIn('order_driver.users_id',$this->deeraDivers())->first();

        return ['aStatusResults'=>$aStatusResults,
            'deeraCharge'=>(isset($oDeeraChargeResults->deera_charge)? $oDeeraChargeResults->deera_charge:0),
            'deeraDriverCharge'=>(isset($deeraDriverCharge->deera_driver_charge)? $deeraDriverCharge->deera_driver_charge:0)];
    }


    public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('PaymentReport', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->store('html',public_path('excel/exports'))->export('xls');
    }

    public function toArray($oResults){
        $aResults=[['id','Order Id','User','amount','status','Payment Type','Notification','Date']];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
                   $oResult->id,
                    '#'.$oResult->order_id ,
                    $oResult->users->first_name ,
                    $oResult->amount,
                    config('array.payment_status')[$oResult->status],
                    array_key_exists($oResult->type,config('array.payment_type'))?  config('array.payment_type')[$oResult->type]:'',
                    config('array.payment_notification')[$oResult->notification],
                    $oResult->created_at
                ];
            }
        }

        return $aResults;
    }

    public function deeraDivers(){
        $oShop=Shop::where('name_en','=','deera')->first();
        $oShopUsers=[0];
        if(count($oShop)){

            $oShopUsers=ShopUsers::where('shop_id','=',$oShop->id)->lists('users_id','users_id');
        }
        return $oShopUsers;
    }

    public function getAllList($data = [])
    {

        $oResults = new Payment();

        $oResults = $oResults->get();

        $aResults = [];

        foreach ($oResults as $result) {
            $aResults[$result->id] = $result->name;
        }
        return $aResults;
    }

    public function create($data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Add Payment','description'=>json_encode($data)]);
        $result = Payment::create($data);

        if ($result) {
            Session::flash('flash_message', 'payment added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $payment = Payment::findOrFail($id);

        Payment::find($id)->update(['notification' => 1]);
        return $payment;
    }

    public function destroy($id)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'delete payment','description'=>json_encode($this->show($id))]);
        $result = Payment::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'payment deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Update Payment','description'=>json_encode(is_array($data) ? $data : $data->all())]);
        $payment = Payment::findOrFail($id);
        $result = $payment->update(is_array($data) ? $data : $data->all());
        if ($result) {
            Session::flash('flash_message', 'payment updated!');
            return true;
        } else {
            return false;
        }

    }

}
