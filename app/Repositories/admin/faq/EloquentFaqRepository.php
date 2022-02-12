<?php
namespace App\Repositories\admin\faq;

use Session;
use App\Models\Faq;
use App\Repositories\admin\faq\FaqContract;

class EloquentFaqRepository implements FaqContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Faq();


if(canAccess('admin.faq.allData')) {

}elseif(canAccess('admin.faq.groupData')){
$oResults = $oResults->where('faq.users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.faq.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('faq.id', '=' , $data['id']);
        }
        if (isset($data['title']) && !empty($data['title'])) {
            $oResults = $oResults->where('faq.title', '=' , $data['title']);
        }
        if (isset($data['body']) && !empty($data['body'])) {
            $oResults = $oResults->where('faq.body', '=' , $data['body']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('faq.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('faq.updated_at', '=' , $data['updated_at']);
        }


if ($statistic !== null) {
$statistic = $this->getStatistic(clone $oResults);
}

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('faq.'.$data['order'], $sort);
        }else{
$oResults = $oResults->orderBy('faq.id', 'desc');
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

          $oResults = new Faq();

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

        $result = Faq::create($data);

        if ($result) {
            Session::flash('flash_message', 'faq added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$faq = Faq::findOrFail($id);

        return $faq;
    }

    public function destroy($id)
    {

        $result =  Faq::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'faq deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$faq = Faq::findOrFail($id);
       $result= $faq->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'faq updated!');
            return true;
        } else {
            return false;
        }

    }

}
