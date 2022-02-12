<?php
namespace App\Repositories\website\blog;

use Session;
use App\Models\Blog;
use App\Repositories\website\blog\BlogContract;

class EloquentBlogRepository implements BlogContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults =Blog::with('blogger');


        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['users_id']) && !empty($data['users_id'])) {
            $oResults = $oResults->where('users_id', '=' , $data['users_id']);
        }
        if (isset($data['title']) && !empty($data['title'])) {
            $oResults = $oResults->where('title', '=' , $data['title']);
        }
        if (isset($data['img']) && !empty($data['img'])) {
            $oResults = $oResults->where('img', '=' , $data['img']);
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', '=' , $data['description']);
        }
        if (isset($data['month']) && !empty($data['month'])) {
            $oResults = $oResults->where('created_at', 'like' ,  $data['month'].'-%');
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

          $oResults = new Blog();

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

        $result = Blog::create($data);

        if ($result) {
            Session::flash('flash_message', 'blog added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$blog = Blog::findOrFail($id);

        return $blog;
    }

    public function destroy($id)
    {

        $result =  Blog::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'blog deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$blog = Blog::findOrFail($id);
       $result= $blog->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'blog updated!');
            return true;
        } else {
            return false;
        }

    }

}
