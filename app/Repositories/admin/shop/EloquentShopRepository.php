<?php
namespace App\Repositories\admin\shop;

use Session,DB;
use App\Models\Shop;
use App\Repositories\admin\shop\ShopContract;

class EloquentShopRepository implements ShopContract
{


    public function getByFilter($data,&$statistic=[])
    {

        $oResults =  Shop::with('branch');


        /* todo authorize users*/

        if(canAccess('admin.shop.allData')) {

        }elseif(canAccess('admin.shop.groupData')){
            $oResults = $oResults->whereIn('id',  current_user()->getShop());
        }elseif(canAccess('admin.shop.userData')){

        }else{return [];}



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('shop.id', '=' , $data['id']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('shop.name_en', 'like' , '%'.$data['name_en'].'%');
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('shop.name_ar', 'like' , '%'.$data['name_ar'].'%');
        }

        if (isset($data['deliver_type']) && !empty($data['deliver_type'])) {
            $oResults = $oResults->whereIn('shop.deliver_type', [config('array.shop_deliver_type_both_index'),$data['deliver_type']]);
        }
        if (isset($data['Owner_first_name']) && !empty($data['Owner_first_name'])) {
            $oResults = $oResults->where('shop.Owner_first_name',  'like' , '%'.$data['Owner_first_name'].'%');
        }
        if (isset($data['Owner_last_name']) && !empty($data['Owner_last_name'])) {
            $oResults = $oResults->where('shop.Owner_last_name', 'like' , '%'.$data['Owner_last_name'].'%');
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $oResults = $oResults->where('shop.email',  'like' , '%'.$data['email'].'%');
        }
        if (isset($data['available_payment']) && !empty($data['available_payment'])) {
            $oResults = $oResults->where('shop.available_payment', '=' , $data['available_payment']);
        }
        if (isset($data['telephone']) && !empty($data['telephone'])) {
            $oResults = $oResults->where('shop.telephone',  'like' , '%'. $data['telephone'].'%');
        }
        if (isset($data['status']) &&  $data['status']!=='') {
            $oResults = $oResults->where('shop.status', '=' , $data['status']);
        }
        if (isset($data['min_amount']) && !empty($data['min_amount'])) {
            $oResults = $oResults->where('shop.min_amount', '=' , $data['min_amount']);
        }
        if (isset($data['working_hour_from']) && !empty($data['working_hour_from'])) {
            $oResults = $oResults->where('shop.working_hour_from', '=' , $data['working_hour_from']);
        }
        if (isset($data['working_hour_to']) && !empty($data['working_hour_to'])) {
            $oResults = $oResults->where('shop.working_hour_to', '=' , $data['working_hour_to']);
        }
        if (isset($data['deliver_time_from']) && !empty($data['deliver_time_from'])) {
            $oResults = $oResults->where('shop.deliver_time_from', '=' , $data['deliver_time_from']);
        }
        if (isset($data['deliver_time_to']) && !empty($data['deliver_time_to'])) {
            $oResults = $oResults->where('shop.deliver_time_to', '=' , $data['deliver_time_to']);
        }
        if (isset($data['deliver_charge']) && !empty($data['deliver_charge'])) {
            $oResults = $oResults->where('shop.deliver_charge', '=' , $data['deliver_charge']);
        }
        if (isset($data['rating']) && !empty($data['rating'])) {
            $oResults = $oResults->where('shop.rating', '=' , $data['rating']);
        }
        if (isset($data['show_menu']) &&  $data['show_menu'] !=='') {
            $oResults = $oResults->where('shop.show_menu', '=' , $data['show_menu']);
        }
        if (isset($data['order_accept_days']) && !empty($data['order_accept_days'])) {
            $oResults = $oResults->where('shop.order_accept_days', '=' , $data['order_accept_days']);
        }
        if (isset($data['offline_order']) && $data['offline_order'] !=='') {
            $oResults = $oResults->where('shop.offline_order', '=' , $data['offline_order']);
        }
        if (isset($data['url']) && !empty($data['url'])) {
            $oResults = $oResults->where('shop.url',  'like' , '%'. $data['url'].'%');
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('shop.img',  'like' , '%'.$data['img'].'%');
        }
        if (isset($data['commission_type']) &&  $data['commission_type'] !=='') {
            $oResults = $oResults->where('shop.commission_type', '=' , $data['commission_type']);
        }
        if (isset($data['discount_type']) &&  $data['discount_type'] !=='') {
            $oResults = $oResults->where('shop.discount_type', '=' , $data['discount_type']);
        }
        if (isset($data['discount']) &&  $data['discount'] !=='') {
            $oResults = $oResults->where('shop.discount', '=' , $data['discount']);
        }
        if (isset($data['area_id']) && !empty($data['area_id'])) {
            $oResults = $oResults->where('shop.area_id', '=' , $data['area_id']);
        }
        if (isset($data['follow_us']) && $data['follow_us']!== '' ) {
            $oResults = $oResults->where('shop.follow_us', '=' , $data['follow_us']);
        }
        if (isset($data['notification']) && $data['notification']!== '') {
            $oResults = $oResults->where('shop.notification', '=' , $data['notification']);
        }
        if (isset($data['address_en']) && !empty($data['address_en'])) {
            $oResults = $oResults->where('shop.address_en',  'like' , '%'. $data['address_en'].'%');
        }
        if (isset($data['address_ar']) && !empty($data['address_ar'])) {
            $oResults = $oResults->where('shop.address_ar',  'like' , '%'.$data['address_ar'].'%');
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('shop.description_en',  'like' , '%'. $data['description_en'].'%');
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('shop.description_ar',  'like' , '%'.$data['description_ar'].'%');
        }
        if (isset($data['summary_en']) && !empty($data['summary_en'])) {
            $oResults = $oResults->where('shop.summary_en',  'like' , '%'. $data['summary_en'].'%');
        }
        if (isset($data['summary_ar']) && !empty($data['summary_ar'])) {
            $oResults = $oResults->where('shop.summary_ar',  'like' , '%'. $data['summary_ar'].'%');
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('shop.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('shop.updated_at', '=' , $data['updated_at']);
        }

        if (isset($data['bestShop']) && !empty($data['bestShop'])) {
            $oResults=$oResults->leftJoin('order','shop.id','=','order.shop_id');
            $oResults = $oResults->select(['shop.*',DB::raw('count(order.id) as order_number')])->groupBy('order.shop_id')->orderBy('order_number','desc');
        }

        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('shop.updated_at', '=' , $data['updated_at']);
        }

        /*_______________________________add__branches to search result*/


        if (isset($data['name_en']) && !empty($data['name_en']) ||isset($data['id']) && !empty($data['id'])) {
            $mainBranchsResult = clone $oResults;

            $mainBranchsIds = $mainBranchsResult->lists('id', 'id');
            $oResults = $oResults->orWhere(function ($query) use ($mainBranchsIds) {
                $query->whereIn('shop.branch', $mainBranchsIds);
            });
        }

        /*_____________________________END__add__branches to search result*/

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('shop.'.$data['order'], $sort);
        }else{
            $oResults = $oResults->orderBy('shop.updated_at', 'desc');
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

        $oResults = new Shop();

        if(canAccess('admin.shop.allData')) {

        }elseif(canAccess('admin.shop.groupData')){
            $oResults = $oResults->whereIn('id',  current_user()->getShop());
        }elseif(canAccess('admin.shop.userData')){

        }else{ return[];}

        if (isset($data['branch']) && $data['branch']!== '') {
            $oResults = $oResults->where('branch', '=' , $data['branch']);
        }
        $oResults = $oResults->get();

        $aResults=[];

        foreach($oResults as $result){
            $aResults[$result->id]=$result->name_en;
        }
        return $aResults;
    }




    public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('Shop List', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->export('xls');
    }

    public function toArray($oResults){
        $aResults=[['name','Owner Name','email','status','img','order Number']];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
                    $oResult->{'name_'.config('app.locale')},
                    $oResult->Owner_first_name,
                    $oResult->email,
                    (array_key_exists($oResult->status,config('array.shop_status')))? config('array.shop_status')[$oResult->status]:"",
                    $oResult->img,
                    (isset($oResult->order_number))? $oResult->order_number:'-',


                ];
            }
        }

        return $aResults;
    }

    public function create($data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Add Shop','description'=>json_encode($data)]);
        $result = Shop::create($data);

        if ($result) {
            Session::flash('flash_message', 'shop added!');
            return $result;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $shop = new Shop();

//        if (canAccess('admin.shop.allData')) {
//
//        } elseif (canAccess('admin.shop.groupData')) {
//            $shop = $shop->whereIn('id', current_user()->getShop());
//        } elseif (canAccess('admin.shop.userData')) {
//
//        } else {
//            return;
//        }

        $shop = $shop->where('id', '=', $id)->first();

        Shop::find($id)->update(['notification' => 1]);
        return $shop;
    }

    public function destroy($id)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'delete shop','description'=>json_encode($this->show($id))]);
        $result =  Shop::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'shop deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Update Shop','description'=>json_encode(is_array($data)? $data:$data->all())]);
        $shop = Shop::findOrFail($id);
        $result= $shop->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'shop updated!');
            return true;
        } else {
            return false;
        }

    }



}
