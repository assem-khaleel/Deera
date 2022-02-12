<?php
namespace App\Repositories\admin\menu_section;

use Session;
use App\Models\MenuSection;
use App\Repositories\admin\menu_section\MenuSectionContract;

class EloquentMenuSectionRepository implements MenuSectionContract
{

    public function getByFilter($data)
    {

        $oResults = new MenuSection();



        if(canAccess('admin.menu_section.allData')) {

        }elseif(canAccess('admin.menu_section.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.menu_section.userData')){

        }else{return;}



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data['name_en']) && !empty($data['name_en'])) {
            $oResults = $oResults->where('name_en', '=' , $data['name_en']);
        }
        if (isset($data['name_ar']) && !empty($data['name_ar'])) {
            $oResults = $oResults->where('name_ar', '=' , $data['name_ar']);
        }
        if (isset($data['shop_id']) && !empty($data['shop_id'])) {
            $oResults = $oResults->where('shop_id', '=' , $data['shop_id']);
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
        }else{
            $oResults = $oResults->orderBy('updated_at', 'desc');
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

          $oResults = MenuSection::with('shop');



        if(canAccess('admin.menu_section.allData')) {

        }elseif(canAccess('admin.menu_section.groupData')){
            $oResults = $oResults->whereIn('shop_id', current_user()->getShop());
        }elseif(canAccess('admin.menu_section.userData')){

        }else{return [];}


        if(isset($data['shop_id']) && !empty($data['shop_id'])){
            $oResults=$oResults->where('shop_id','=',$data['shop_id']);
        }
        //$oResults=$oResults->distinct('name_en');

          $oResults = $oResults->get();

$aResults=[];

foreach($oResults as $result){
    //if(!in_array($result->name_en,$aResults)){

        $aResults[$result->id]=$result->name_en.(isset($result->shop->name_en)?  ' -' .$result->shop->name_en:'');
    //}
}
          return $aResults;
    }




    public function exportExcel($request){

        if(!isset($request->exportExcel)){return false;}

        $request->merge(['getAllRecords'=>1]);
        $oResults=$this->getByFilter($request);

        $excelData=$this->toArray($oResults);


        \Excel::create('Menu Sections List', function($excel) use($excelData) {

            $excel->sheet('Excel sheet', function($sheet) use($excelData) {

                $sheet->fromArray($excelData);
                $sheet->setOrientation('landscape');

            });

        })->export('xls');
    }

    public function toArray($oResults){
        $aResults=[];

        if(count($oResults)){

            foreach($oResults as $oResult){
                $aResults[]=[

                    $oResult->id,
                    $oResult->name_en,
                    $oResult->shop->name_en,
                    config('array.menu_section_status')[$oResult->status]
                ];
            }
        }

        return $aResults;
    }


    public function create($data)
    {

        $result = MenuSection::create($data);

        if ($result) {
            Session::flash('flash_message', 'menu_section added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$menu_section = MenuSection::findOrFail($id);

        return $menu_section;
    }

    public function destroy($id)
    {

        $result =  MenuSection::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'menu_section deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$menu_section = MenuSection::findOrFail($id);
       $result= $menu_section->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'menu_section updated!');
            return true;
        } else {
            return false;
        }

    }

}
