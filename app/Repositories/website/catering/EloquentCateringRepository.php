<?php
namespace App\Repositories\website\catering;

use Session;
use App\Models\Catering;
use App\Repositories\website\catering\CateringContract;

class EloquentCateringRepository implements CateringContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Catering();


if(canAccess('admin.catering.allData')) {

}elseif(canAccess('admin.catering.groupData')){
$oResults = $oResults->where('users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.catering.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('name', '=' , $data['name']);
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $oResults = $oResults->where('email', '=' , $data['email']);
        }
        if (isset($data['phone']) && !empty($data['phone'])) {
            $oResults = $oResults->where('phone', '=' , $data['phone']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
        }
        if (isset($data['people_number']) && !empty($data['people_number'])) {
            $oResults = $oResults->where('people_number', '=' , $data['people_number']);
        }
        if (isset($data['book_date']) && !empty($data['book_date'])) {
            $oResults = $oResults->where('book_date', '=' , $data['book_date']);
        }
        if (isset($data['book_time']) && !empty($data['book_time'])) {
            $oResults = $oResults->where('book_time', '=' , $data['book_time']);
        }
        if (isset($data['location']) && !empty($data['location'])) {
            $oResults = $oResults->where('location', '=' , $data['location']);
        }
        if (isset($data['request']) && !empty($data['request'])) {
            $oResults = $oResults->where('request', '=' , $data['request']);
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

          $oResults = new Catering();

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

        $result = Catering::create($data);

        if ($result) {
            Session::flash('flash_success', trans('website.cateringThanx'));
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$catering = Catering::findOrFail($id);

        return $catering;
    }

    public function destroy($id)
    {

        $result =  Catering::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'catering deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$catering = Catering::findOrFail($id);
       $result= $catering->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'catering updated!');
            return true;
        } else {
            return false;
        }

    }

}
