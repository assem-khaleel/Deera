<?php
namespace App\Repositories\admin\order;

use Session;
use App\Models\Order;

use App\Models\Area;
use App\Repositories\admin\order\OrderContract;


use App\Models\OrderDriver as mOrderDriver;
use Illuminate\Support\Facades\DB;

class EloquentOrderRepository implements OrderContract
{

    public function getByFilter($data)
    {

        $oResults = Order::with('users', 'address', 'shop','cart');


        if (canAccess('admin.order.allData')) {

        } elseif (canAccess('admin.order.groupData')) {
            $oResults = $oResults->whereIn('order.shop_id', current_user()->getShop());
        } elseif (canAccess('admin.order.userData')) {
            $usersOrders = mOrderDriver::where('users_id', '=', current_user()->getUser()->id)->lists('order_id',
                'order_id');
            $oResults = $oResults->whereIn('id', $usersOrders);


        } else {
            return;
        }

        if (isset($data['id']) && !empty($data['id'])) {
            // $oResults = $oResults->where('order.id', '=', $data['id']);
             $oResults = $oResults->where('order.success_order_id', '=', $data['id']);

        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('order.users_id', '=', $data['users_id']);
        }


        if (isset($data['users_name']) && !empty($data['users_name'])) {
            $oResults = $oResults->join('users','users.id','=','order.users_id')->select(['order.*'])->where(function($query) use($data){
                $query=$query->where('first_name','like','%'.$data['users_name'].'%');
                $query=$query->orWhere('first_name','like','%'.$data['users_name'].'%');
            });

        }

        if (isset($data['users_type']) &&  $data['users_type']!=='') {

            if (!(isset($data['users_name']) && !empty($data['users_name']))) {
                $oResults = $oResults->join('users','users.id','=','order.users_id')->select(['order.*']);

            }
            $oResults = $oResults->where('users.type','=',$data['users_type']);

        }

        if (isset($data['mobile']) &&  $data['mobile']!=='') {

            if (!(isset($data['users_name']) && !empty($data['users_name'])) && !(isset($data['users_type']) &&  $data['users_type']!=='')) {
                $oResults = $oResults->join('users','users.id','=','order.users_id')->select(['order.*']);

            }
            $oResults = $oResults->where('users.mobile','like', '%'.$data['mobile'].'%');

        }

        if (isset($data['payment_type']) &&  $data['payment_type']!=='') {


                $oResults = $oResults->join('payment','payment.order_id','=','order.id')->where('payment.type','=',$data['payment_type']);

        }

        if(isset($data['coffee_id'])&&  !empty($data['coffee_id'])){
            $oResults = $oResults ->join('cart','cart.order_id','=','order.id')
                ->where('cart.coffee_id','=',$data['coffee_id']);

        }

        if(isset($data['menu_section_id'])&&  !empty($data['menu_section_id'])){

            if (!(isset($data['coffee_id']) && !empty($data['coffee_id']))) {
                $oResults = $oResults ->join('cart','cart.order_id','=','order.id');

            }
            $oResults = $oResults
                ->join('coffee','cart.coffee_id','=','coffee.id')
                ->where('coffee.menu_section_id','=',$data['menu_section_id']);

        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('order.shop_id', '=', $data['shop_id']);
        }
        if (isset($data['selected_shop_id']) && !empty($data['selected_shop_id'])) {
            $oResults = $oResults->where('order.shop_id', '=', $data['selected_shop_id']);
        }
        if (isset($data['area_id']) && !empty($data['area_id'])) {
            $oResults = $oResults->where('order.area_id', '=', $data['area_id']);
        }
        if (isset($data['from_id']) && !empty($data['from_id'])) {
            $oResults = $oResults->where('order.from_id', '=', $data['from_id']);
        }
        if (isset($data['address_id']) && !empty($data['address_id'])) {
            $oResults = $oResults->where('order.address_id', '=', $data['address_id']);
        }
        if (isset($data['order_time']) && !empty($data['order_time'])) {
            $oResults = $oResults->where('order.order_time', '=', $data['order_time']);
        }
        if (isset($data['deliver_time']) && !empty($data['deliver_time'])) {
            $oResults = $oResults->where('order.deliver_time', '=', $data['deliver_time']);
        }
        if (isset($data['deliver_date']) && !empty($data['deliver_date'])) {
            $oResults = $oResults->where('order.deliver_date', 'like', $data['deliver_date'].'%');
        }
        if (isset($data['selected_date']) && !empty($data['selected_date'])) {
            $oResults = $oResults->where('order.deliver_date', '=', $data['selected_date']);
        }

        if (isset($data['note']) && !empty($data['note'])) {
            $oResults = $oResults->where('order.note', 'like', '%' . $data['note'] . '%');
        }
        if (isset($data['deliver_charge']) && !empty($data['deliver_charge'])) {
            $oResults = $oResults->where('order.deliver_charge', '=', $data['deliver_charge']);
        }
        if (isset($data['rate']) && $data['rate'] !== '') {
            $oResults = $oResults->where('order.rate', '=', $data['rate']);
        }
        if (isset($data['point']) && $data['point'] !== '') {
            $oResults = $oResults->where('order.point', '=', $data['point']);
        }
        if (isset($data['status']) && $data['status'] !== '') {
            $data['status'] = (is_array($data['status'])) ? $data['status'] : [$data['status']];
            $oResults = $oResults->whereIn('order.status', $data['status']);

        }else{


            $oResults = $oResults->where('order.status','!=', [config('array.order_driver_status_pending_index')]);

        }
        if (isset($data['deliver_type']) && $data['deliver_type'] !== '') {

            $oResults = $oResults->where('order.deliver_type','=', $data['deliver_type']);

        }

        if (isset($data['driver_id']) && !empty($data['driver_id'])) {


            $aOrderDrivers = mOrderDriver::where(['users_id' => $data['driver_id']])
                ->whereIn('status', [
                    config('array.order_driver_status_pending_index'),
                    config('array.order_driver_status_assigned_index')
                ])
                ->lists('order_id', 'order_id');

            $oResults = $oResults->whereIn('order.id', $aOrderDrivers);
        }
        if (isset($data['notification']) && $data['notification'] !== '') {
            $oResults = $oResults->where('order.notification', '=', $data['notification']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('order.created_at', '=', $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('order.updated_at', '=', $data['updated_at']);
        }


        if (isset($data['period_type']) && !empty($data['period_type'])) {

            $period_prefix = [
                '' => '',
                'daily' => gmdate('Y-m-d '),
                'monthly' => gmdate('Y-m-'),
                'yearly' => gmdate('Y-')
            ];
            $oResults = $oResults->where('order.created_at', 'like', $period_prefix[$data['period_type']] . '%');
        }

        if (isset($data['from_date']) && !empty($data['from_date'])) {
            $oResults = $oResults->where('order.deliver_date', '>=', $data['from_date']);
        }

        if (isset($data['to_date']) && !empty($data['to_date'])) {
            $oResults = $oResults->where('order.deliver_date', '<=', $data['to_date']);
        }

        if( isset($data['cloneQuery']) && !empty($data['cloneQuery'])){
            return clone $oResults;
        }

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('order.'.$data['order'], $sort);
        } else {
            $oResults = $oResults->orderBy('order.updated_at', 'desc');
        }



        $pagination_size=(isset($data['pagination_size']) && !empty($data['pagination_size']))?  $data['pagination_size']:config('project.pagination_size');

        if(isset($data['getAllRecords']) && !empty($data['getAllRecords'])){
            $oResults = $oResults->get();
        }elseif (isset($data['page_name']) && !empty($data['page_name'])) {
            $oResults = $oResults->paginate($pagination_size, ['*'], $data['page_name']);
        }else{
            $oResults = $oResults->paginate($pagination_size);
        }
//        dd($oResults->first()->cart());
        return $oResults;
    }

    public function getAllList($data = [])
    {

        $oResults = new Order();


        if (canAccess('admin.order.allData')) {

        } elseif (canAccess('admin.order.groupData')) {
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        } elseif (canAccess('admin.order.userData')) {

        } else {
            return;
        }


        $oResults = $oResults->get();

        $aResults = [];

        foreach ($oResults as $result) {
            $userName = (isset($result->users->first_name)) ? $result->users->first_name . ' - ' : '';
            $shopName = (isset($result->shop->name_en)) ? $result->shop->name_en . ' - ' : '';
            $aResults[$result->id] = $userName . $shopName . $result->id;
        }
        return $aResults;
    }




    public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('OrderPayment', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->store('html',public_path('excel/exports'))->export(($request->exportExcel =='pdf')?'pdf':'xls');
    }

    public function toArray($oResults){
        $aResults=[['id','user name','Shop','area','deliver date','charge','total','status']];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
                    $oResult->id ,
                    isset($oResult->users()->first()->first_name)? $oResult->users()->first()->first_name:'#' ,
                    isset($oResult->shop()->first()->name_en)? $oResult->shop()->first()->name_en:'' ,
                    (isset($oResult->area->name_en))?$oResult->area->name_en:'' ,
                    $oResult->deliver_date.'-'.$oResult->deliver_time ,
                    $oResult->deera_charge ,
                    $oResult->total ,
                    (array_key_exists($oResult->status,config('array.order_status')))?config('array.order_status')[$oResult->status]:''
                ];
            }
        }

        return $aResults;
    }




















    public function exportBillExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->billToArray($oResults);


        \Excel::create('blingpayment', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->store('html',public_path('excel/exports'))->export(($request->exportExcel =='pdf')?'pdf':'xls');
    }

    public function billToArray($oResults){
        $aResults=[['id','user name','Shop','area','deliver date','charge','total','status']];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
                    $oResult->id ,
                    isset($oResult->users()->first()->first_name)? $oResult->users()->first()->first_name:'#' ,
                    isset($oResult->shop()->first()->name_en)? $oResult->shop()->first()->name_en:'' ,
                    (isset($oResult->area->name_en))?$oResult->area->name_en:'' ,
                    $oResult->deliver_date.'-'.$oResult->deliver_time ,
                    $oResult->deera_charge ,
                    $oResult->total ,
                    (array_key_exists($oResult->status,config('array.order_status')))?config('array.order_status')[$oResult->status]:''


                ];




            }
        }

        return $aResults;
    }











    public function create($data)
    {

        $track = new \App\Models\AuditTrack();
        $track->track(['action' => 'Add Order', 'description' => json_encode($data)]);
        $result = Order::create($data);

        if ($result) {
            Session::flash('flash_message', 'order added!');
            return true;
        } else {
            return false;
        }
    }

    public function destroy($id)
    {

        $track = new \App\Models\AuditTrack();
        $track->track(['action' => 'Delete Order', 'description' => json_encode($this->show($id))]);
        $result = Order::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'order deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $order = Order::findOrFail($id);


        Order::find($id)->update(['notification' => 1]);

        return $order;
    }

    public function update($id, $data)
    {
$data=is_array($data) ? $data : $data->all();

        $track = new \App\Models\AuditTrack();
        $track->track(['action' => 'Update Order', 'description' => json_encode((is_array($data))? $data:$data->all())]);

        $order = Order::findOrFail($id);

        $this->sendOrderStatusNotification($order,$data);

        if(isset($data['create_success_order_id'])){
            $data['success_order_id']=$order->new_success_order_id();
        }
        $result = $order->update($data);
        if ($result) {
            Session::flash('flash_message', 'order updated!');
            return true;
        } else {
            return false;
        }

    }

    public function sendOrderStatusNotification($order,$data){

        if(!isset($data['status']) || (isset($data['status']) && $order->status ==$data['status'])){ return false;}

        $users=$order->users;



        if($data['status'] ==config('array.order_status_payed_index')){
            pushNotification($users,'#'.$order->id.' Order Placed','Your Order has been placed successfully');
        }else if($data['status'] ==config('array.order_status_ready_index')){
            pushNotification($users,'#'.$order->id.' Order ready','Your Order is ready');
        }else if($data['status'] ==config('array.order_status_delivered_index')){
            pushNotification($users,'#'.$order->id.' Order Delivered','Your Order delivered successfully');
        }

    }

    public function getStatistics($data = [])
    {
        $mainOrderModel =$this->getByFilter($data->all()+['cloneQuery'=>1]);

//        if (canAccess('admin.order.allData')) {
//
//        } elseif (canAccess('admin.order.groupData')) {
//            $mainOrderModel = $mainOrderModel->whereIn('shop_id', current_user()->getShop());
//        } elseif (canAccess('admin.order.userData')) {
//
//        } else {
//            return;
//        }
//
//
//        if (isset($data['period_type']) && !empty($data['period_type'])) {
////            $day = date('w');
////            $week_start = date('Y-m-d', strtotime('-'.$day.' days'));
//
//            $period_prefix = [
//                '' => '',
//                'daily' => gmdate('Y-m-d '),
//                'monthly' => gmdate('Y-m-'),
//                'yearly' => gmdate('Y-')
//            ];
//            $mainOrderModel = $mainOrderModel->where('order.created_at', 'like',
//                $period_prefix[$data['period_type']] . '%');
//        }
        $oTotalOrders = clone $mainOrderModel;
        $oTotalOrders = $oTotalOrders->count();

        $oTotalOrdersPrice = clone $mainOrderModel;
        $oTotalOrdersPrice = $oTotalOrdersPrice->sum('total');

        $oDeeraCharge = clone $mainOrderModel;
        $oDeeraCharge = $oDeeraCharge->sum('deera_charge');


        $oPendingOrders = clone $mainOrderModel;
        $oPendingOrders = $oPendingOrders->where('order.status', '=', config('array.order_status_pending_index'))->count();

        $oPayedOrders = clone $mainOrderModel;

        /* \admin\order\EloquentOrderRepository.php TODO 1 (statistic) -  when you add new status for order just add it here if it's complete or in progress */
        $oPayedOrders = $oPayedOrders->whereIn('order.status',
            [
                config('array.order_status_payed_index'),
                config('array.order_status_delivered_index'),
                config('array.order_status_delivering_index'),
                config('array.order_status_preparing_index'),
                config('array.order_status_ready_index'),
                config('array.order_status_delay_index'),
            ])->count();


        $oRejectOrders = clone $mainOrderModel;
        $oRejectOrders = $oRejectOrders->where('order.status', '=', config('array.order_status_reject_index'))->count();


        $oOrderAreas = DB::table('area')->join('order', 'area.id', '=', 'order.area_id')->select([
            'area.name_en',
            DB::raw('count(order.id) as number')
        ]);

        if (canAccess('admin.order.allData')) {

        } elseif (canAccess('admin.order.groupData')) {
            $oOrderAreas = $oOrderAreas->whereIn('order.shop_id', current_user()->getShop());
        } elseif (canAccess('admin.order.userData')) {

        } else {
            return;
        }

        if (isset($data['period_type']) && !empty($data['period_type'])) {
//            $day = date('w');
//            $week_start = date('Y-m-d', strtotime('-'.$day.' days'));

            $period_prefix = [
                '' => '',
                'daily' => gmdate('Y-m-d '),
                'monthly' => gmdate('Y-m-'),
                'yearly' => gmdate('Y-')
            ];
            $oOrderAreas = $oOrderAreas->where('order.created_at', 'like', $period_prefix[$data['period_type']] . '%');
        }
        $oOrderAreas = $oOrderAreas->groupBy('order.area_id')->limit(6)->get();


        $oChartResults = Order::select([
            'area_id',
            DB::raw('concat(year(created_at),"-",month(created_at)) as oneMonth'),
            DB::raw('sum(total) as total')
        ]);
        if (canAccess('admin.order.allData')) {

        } elseif (canAccess('admin.order.groupData')) {
            $oChartResults = $oChartResults->whereIn('order.shop_id', current_user()->getShop());
        } elseif (canAccess('admin.order.userData')) {

        } else {
            return;
        }
        if (isset($data['period_type']) && !empty($data['period_type'])) {
//            $day = date('w');
//            $week_start = date('Y-m-d', strtotime('-'.$day.' days'));

            $period_prefix = [
                '' => '',
                'daily' => gmdate('Y-m-d '),
                'monthly' => gmdate('Y-m-'),
                'yearly' => gmdate('Y-')
            ];
            $oChartResults = $oChartResults->where('order.created_at', 'like',
                $period_prefix[$data['period_type']] . '%');
        }
        $oChartResults = $oChartResults->groupBy('oneMonth')->get();


        return [
            'totalOrder' => $oTotalOrders,
            'totalOrderPrice' =>$oTotalOrdersPrice,
            'deeraCharge' =>$oDeeraCharge,
            'pendingOrder' => $oPendingOrders,
            'payedOrder' => $oPayedOrders,
            'rejectOrder' => $oRejectOrders,
            'oOrderAreas' => $oOrderAreas,
            'oChartResults' => $oChartResults
        ];

    }


    public function orderMainChart($data = [])
    {
        $mainOrderModel =$this->getByFilter($data->all()+['cloneQuery'=>1]);

        $oChartResults = $mainOrderModel->select([
            'area_id',
            DB::raw('DATE(created_at) as oneMonth'),
            DB::raw('sum(total) as total')
        ]);

        $oChartResults = $oChartResults->groupBy('oneMonth')->orderBy('oneMonth')->get();
        $aChartResults =[];

        foreach($oChartResults as $oChartResult){
            $aChartResults[$oChartResult->oneMonth]=$oChartResult;
        }

        return $aChartResults;


    }

}
