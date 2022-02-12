<?php
namespace App\Repositories\admin\coffee;

use Session,DB;
use App\Models\Coffee;
use App\Models\Shop as mShop;
use App\Repositories\admin\coffee\CoffeeContract;

class EloquentCoffeeRepository implements CoffeeContract
{

    public function getByFilter($data)
    {

        $oResults = new Coffee();

        if(canAccess('admin.coffee.allData')) {

        }elseif(canAccess('admin.coffee.groupData')){
            $oResults = $oResults->whereIn('coffee.shop_id', current_user()->getShop());
        }elseif(canAccess('admin.coffee.userData')){


        }else{return[];}


        if (isset($data['best']) && !empty($data['best'])) {
            $oResults=$oResults->leftJoin('cart','coffee.id','=','cart.coffee_id');
            $oResults = $oResults->select(['coffee.*',DB::raw('count(cart.id) as order_number')])->groupBy('cart.coffee_id')->orderBy('order_number','desc');
        }


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('coffee.id', '=' , $data['id']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('coffee.name_en', '=' , $data['name_en']);
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('coffee.name_ar', '=' , $data['name_ar']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('coffee.shop_id', '=' , $data['shop_id']);
        }else{
            $mainBranchsIds=mShop::where('branch','=','0')->lists('id','id');

            $oResults = $oResults->whereIn('coffee.shop_id',$mainBranchsIds);

        }
        if (isset($data['cuisine_id']) && !empty($data['cuisine_id'])) {
            $oResults = $oResults->where('coffee.cuisine_id', '=' , $data['cuisine_id']);
        }
        if (isset($data['menu_section_id']) && !empty($data['menu_section_id'])) {
            $oResults = $oResults->where('coffee.menu_section_id', '=' , $data['menu_section_id']);
        }
        if (isset($data['category_id']) && !empty($data['category_id'])) {
            $oResults = $oResults->where('coffee.category_id', '=' , $data['category_id']);
        }
        if (isset($data['delivery_menu_id']) && !empty($data['delivery_menu_id'])) {
            $oResults = $oResults->where('coffee.delivery_menu_id', '=' , $data['delivery_menu_id']);
        }
        if (isset($data['parent_id']) && !empty($data['parent_id'])) {
            $oResults = $oResults->where('coffee.parent_id', '=' , $data['parent_id']);
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('coffee.price', '=' , $data['price']);
        }
        if (isset($data['quantity']) && !empty($data['quantity'])) {
            $oResults = $oResults->where('coffee.quantity', '=' , $data['quantity']);
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('coffee.img', '=' , $data['img']);
        }
        if (isset($data['discount']) && !empty($data['discount'])) {
            $oResults = $oResults->where('coffee.discount', '=' , $data['discount']);
        }
        if (isset($data['available_from']) && !empty($data['available_from'])) {
            $oResults = $oResults->where('coffee.available_from', '=' , $data['available_from']);
        }
        if (isset($data['available_to']) && !empty($data['available_to'])) {
            $oResults = $oResults->where('coffee.available_to', '=' , $data['available_to']);
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('coffee.description_en', '=' , $data['description_en']);
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('coffee.description_ar', '=' , $data['description_ar']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('coffee.status', '=' , $data['status']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('coffee.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('coffee.updated_at', '=' , $data['updated_at']);
        }
        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('coffee.'.$data['order'], $sort);
        }else{
            $oResults = $oResults->orderBy('coffee.updated_at', 'desc');
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

          $oResults = new Coffee();

        if(canAccess('admin.coffee.allData')) {

        }elseif(canAccess('admin.coffee.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.coffee.userData')){

        }else{return [];}



        $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name_en .(isset($result->shop->name_en)? ' -'.$result->shop->name_en:'');
}
          return $aResults;
    }




    public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('Coffee List', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->export('xls');
    }

    public function toArray($oResults){
        $aResults=[['id','name','shop','price','quantity','status','Order Number']];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
 $oResult->id,
                    $oResult->name_en,
                    $oResult->shop->name_en,
                    $oResult->price,
                    $oResult->quantity ,
                    config('array.coffee_status')[$oResult->status],

                    (isset($oResult->order_number))? $oResult->order_number:'-',




                ];
            }
        }

        return $aResults;
    }


    public function create($data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Add Coffee','description'=>json_encode($data)]);

        $result = Coffee::create($data);

        if ($result) {
            Session::flash('flash_message', 'coffee added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$coffee = Coffee::findOrFail($id);

        return $coffee;
    }

    public function destroy($id)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Delete Coffee','description'=>json_encode($this->show($id))]);
        $result =  Coffee::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'coffee deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {

        $track=  new \App\Models\AuditTrack();$track->track(['action'=>'Update Coffee','description'=>json_encode(is_array($data)? $data:$data->all())]);
$coffee = Coffee::findOrFail($id);
       $result= $coffee->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'coffee updated!');
            return true;
        } else {
            return false;
        }

    }

}
