<?php
namespace App\Repositories\website\cuisine;

use Session;
use App\Models\Cuisine;
use App\Repositories\website\cuisine\CuisineContract;

class EloquentCuisineRepository implements CuisineContract
{

    public function getByFilter($data)
    {

        $oResults = new Cuisine();

         $oResults = $oResults->where('status', '=' ,config('array.cuisine_status_show_index'));


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('name_en', '=' , $data['name_en']);
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('name_ar', '=' , $data['name_ar']);
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', '=' , $data['status']);
        }
        if (isset($data['description_en']) && !empty($data['description_en'])) {
            $oResults = $oResults->where('description_en', '=' , $data['description_en']);
        }
        if (isset($data['description_ar']) && !empty($data['description_ar'])) {
            $oResults = $oResults->where('description_ar', '=' , $data['description_ar']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', '=' , $data['updated_at']);
        }
        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], $sort);
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

          $oResults = new Cuisine();

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
$aResults[$result->id]=$result->name;
}
          return $aResults;
    }

    public function create($data)
    {

        $result = Cuisine::create($data);

        if ($result) {
            Session::flash('flash_message', 'cuisine added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cuisine = Cuisine::findOrFail($id);

        return $cuisine;
    }

    public function destroy($id)
    {

        $result =  Cuisine::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cuisine deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cuisine = Cuisine::findOrFail($id);
       $result= $cuisine->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cuisine updated!');
            return true;
        } else {
            return false;
        }

    }

}
