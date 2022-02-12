<?php
namespace App\Repositories\admin\blogger;

use Session;
use App\Models\Blogger;
use App\Repositories\admin\blogger\BloggerContract;

class EloquentBloggerRepository implements BloggerContract
{

    public function getByFilter($data,&$statistic=null)
    {

        $oResults = new Blogger();


if(canAccess('admin.blogger.allData')) {

}elseif(canAccess('admin.blogger.groupData')){
$oResults = $oResults->where('blogger.users_id','=',  current_user()->getUser()->id);
}elseif(canAccess('admin.blogger.userData')){

}else{return;}

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('blogger.id', '=' , $data['id']);
        }
        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('blogger.name', 'like' , '%'.$data['name'].'%');
        }
        if (isset($data['phone']) && !empty($data['phone'])) {
            $oResults = $oResults->where('blogger.phone', 'like' , '%'.$data['phone'].'%');
        }
        if (isset($data['email']) && !empty($data['email'])) {
            $oResults = $oResults->where('blogger.email', 'like' , '%'.$data['email'].'%');
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('blogger.status', '=' , $data['status']);
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('blogger.created_at', '=' , $data['created_at']);
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('blogger.updated_at', '=' , $data['updated_at']);
        }


if ($statistic !== null) {
$statistic = $this->getStatistic(clone $oResults);
}

        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy('blogger.'.$data['order'], $sort);
        }else{
$oResults = $oResults->orderBy('blogger.id', 'desc');
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

          $oResults = new Blogger();

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

        $result = Blogger::create($data);

        if ($result) {
            Session::flash('flash_message', 'blogger added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$blogger = Blogger::findOrFail($id);

        return $blogger;
    }

    public function destroy($id)
    {

        $result =  Blogger::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'blogger deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$blogger = Blogger::findOrFail($id);
       $result= $blogger->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'blogger updated!');
            return true;
        } else {
            return false;
        }

    }


public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('Blogger', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->store('html',public_path('excel/exports'))->export(($request->exportExcel =='pdf')?'pdf':'xls');
    }


    public function toArray($oResults){
        $aResults=[['id',' name','phone','email','status','created_at','updated_at']];

          if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[
                    $oResult->id ,
                    
                    (isset($oResult->name))?$oResult->name:'' ,
                     (isset($oResult->email))?$oResult->phone:'' ,
                     (isset($oResult->phone))?$oResult->email:'' ,
                     (isset($oResult->status))?$oResult->status:'' ,
                     (isset($oResult->created_at))?$oResult->created_at:'' ,
                     (isset($oResult->updated_at))?$oResult->updated_at:'' ,
                        
           
                ];
            }
        }

        return $aResults;
    }


//-----------------------------------------


}
