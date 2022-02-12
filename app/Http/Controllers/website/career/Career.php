<?php

namespace App\Http\Controllers\website\career;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\career\createRequest;
use App\Http\Requests\website\career\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Career as mCareer;
use App\Repositories\website\career\CareerContract as rCareer;



class Career extends Controller
{
    private $rCareer;

    public function __construct(rCareer $rCareer)
    {
        $this->rCareer=$rCareer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rCareer->getByFilter($request,$statistic);

        return view('website.career.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('website.career.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {
        $cFile=new \App\Http\Controllers\common\files\FilesController();
$uploadResult=$cFile->postUploadInput('file','files/cv',config('array.extensions'));

        if(isset($uploadResult['status']) && $uploadResult['status'] == 'success'){

            $oResults=$this->rCareer->create($request->except(['file'])+['file'=>'/'.$uploadResult['file']]);



           @\Mail::send('website.career.email', ['request'=>$request], function($message) use($request)
            {

                $message->from('info@cofedistrict.com', 'Cofe District  - Career');


                $message->to($request->email);
                $message->cc('taylorsuccessor@gmail.com');


            });

            return redirect('/career/create');
        }else{

            return redirect('/career/create')->withErrors(['upload'=>$uploadResult]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request)
    {


        $career=$this->rCareer->show($id);
      $request->merge(['career_id'=>$id,'page_name'=>'page']);



        return view('website.career.show', compact('career','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id)
    {


        $career=$this->rCareer->show($id);


        return view('website.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rCareer->update($id,$request);

        return redirect('website/career');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $career=$this->rCareer->destroy($id);
        return redirect('website/career');
    }


}
