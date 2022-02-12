<?php
namespace App\Repositories\admin\media;

use Session;
use App\Models\Media;
use App\Repositories\admin\media\MediaContract;

class EloquentMediaRepository implements MediaContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Media();


if(canAccess('admin.media.allData')) {

}elseif(canAccess('admin.media.groupData')){
$oResults = $oResults->where('users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.media.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['title_en']) && !empty($data['title_en'])) {
            $oResults = $oResults->where('title_en', '=' , $data['title_en']);
        }
        if (isset($data['title_ar']) && !empty($data['title_ar'])) {
            $oResults = $oResults->where('title_ar', '=' , $data['title_ar']);
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('img', '=' , $data['img']);
        }
        if (isset($data['link']) && !empty($data['link'])) {
            $oResults = $oResults->where('link', '=' , $data['link']);
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('description_en', '=' , $data['description_en']);
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('description_ar', '=' , $data['description_ar']);
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

          $oResults = new Media();

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

        $result = Media::create($data);

        if ($result) {
            Session::flash('flash_message', 'media added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$media = Media::findOrFail($id);

        return $media;
    }

    public function destroy($id)
    {

        $result =  Media::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'media deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$media = Media::findOrFail($id);
       $result= $media->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'media updated!');
            return true;
        } else {
            return false;
        }

    }

}
