<?php
namespace App\Repositories\admin\offer;

use Session;
use App\Models\Offer;
use App\Repositories\admin\offer\OfferContract;

class EloquentOfferRepository implements OfferContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Offer();


if(canAccess('admin.offer.allData')) {

}elseif(canAccess('admin.offer.groupData')){
$oResults = $oResults->where('users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.offer.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['coffee_id']) && !empty($data['coffee_id'])) {
            $oResults = $oResults->where('coffee_id', '=' , $data['coffee_id']);
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

          $oResults = new Offer();

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

        $result = Offer::create($data);

        if ($result) {
            Session::flash('flash_message', 'offer added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$offer = Offer::findOrFail($id);

        return $offer;
    }

    public function destroy($id)
    {

        $result =  Offer::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'offer deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$offer = Offer::findOrFail($id);
       $result= $offer->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'offer updated!');
            return true;
        } else {
            return false;
        }

    }

}
