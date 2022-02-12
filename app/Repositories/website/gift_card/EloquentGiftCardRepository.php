<?php
namespace App\Repositories\website\gift_card;

use Session;
use App\Models\GiftCard;
use App\Repositories\website\gift_card\GiftCardContract;

class EloquentGiftCardRepository implements GiftCardContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new GiftCard();

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['title_en']) && !empty($data['title_en'])) {
            $oResults = $oResults->where('title_en', '=' , $data['title_en']);
        }
        if (isset($data['title_ar']) && !empty($data['title_ar'])) {
            $oResults = $oResults->where('title_ar', '=' , $data['title_ar']);
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('price', '=' , $data['price']);
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
        if (isset($data['discount_type']) && !empty($data['discount_type'])) {
            $oResults = $oResults->where('discount_type', '=' , $data['discount_type']);
        }
        if (isset($data['discount']) && !empty($data['discount'])) {
            $oResults = $oResults->where('discount', '=' , $data['discount']);
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

        $oResults = new GiftCard();

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

        $result = GiftCard::create($data);

        if ($result) {
            Session::flash('flash_message', 'gift_card added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $gift_card = GiftCard::findOrFail($id);

        return $gift_card;
    }

    public function destroy($id)
    {

        $result =  GiftCard::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'gift_card deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
        $gift_card = GiftCard::findOrFail($id);
        $result= $gift_card->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'gift_card updated!');
            return true;
        } else {
            return false;
        }

    }

}
