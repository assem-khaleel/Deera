<?php
namespace App\Repositories\website\career;

use Session;
use App\Models\Career;
use App\Repositories\website\career\CareerContract;

class EloquentCareerRepository implements CareerContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Career();


if(canAccess('admin.career.allData')) {

}elseif(canAccess('admin.career.groupData')){
$oResults = $oResults->where('users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.career.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['first_name']) && !empty($data['first_name'])) {
            $oResults = $oResults->where('first_name', '=' , $data['first_name']);
        }
        if (isset($data['last_name']) && !empty($data['last_name'])) {
            $oResults = $oResults->where('last_name', '=' , $data['last_name']);
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $oResults = $oResults->where('email', '=' , $data['email']);
        }
        if (isset($data['phone']) && !empty($data['phone'])) {
            $oResults = $oResults->where('phone', '=' , $data['phone']);
        }
        if (isset($data['position']) && !empty($data['position'])) {
            $oResults = $oResults->where('position', '=' , $data['position']);
        }
        if (isset($data['file']) && !empty($data['file'])) {
            $oResults = $oResults->where('file', '=' , $data['file']);
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

          $oResults = new Career();

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

        $result = Career::create($data);

        if ($result) {
            Session::flash('flash_success', trans('website.successAddCareer'));
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$career = Career::findOrFail($id);

        return $career;
    }

    public function destroy($id)
    {

        $result =  Career::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'career deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$career = Career::findOrFail($id);
       $result= $career->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'career updated!');
            return true;
        } else {
            return false;
        }

    }

}
