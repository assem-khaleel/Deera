<?php

namespace App\Http\Controllers\admin\career;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\career\createRequest;
use App\Http\Requests\admin\career\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Career as mCareer;
use App\Repositories\admin\career\CareerContract as rCareer;


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

        return view('admin.career.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.career.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCareer->create($request->all());

        return redirect('admin/career');
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



        return view('admin.career.show', compact('career','request'));
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


        return view('admin.career.edit', compact('career'));
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

        return redirect('admin/career');
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
        return redirect('admin/career');
    }


}
