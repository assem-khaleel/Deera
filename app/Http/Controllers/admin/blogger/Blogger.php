<?php

namespace App\Http\Controllers\admin\blogger;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\blogger\createRequest;
use App\Http\Requests\admin\blogger\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Blogger as mBlogger;
use App\Repositories\admin\blogger\BloggerContract as rBlogger;



class Blogger extends Controller
{
    private $rBlogger;

    public function __construct(rBlogger $rBlogger)
    {
        $this->rBlogger=$rBlogger;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
            $this->rBlogger->exportExcel($request);


            
        $statistic=null;
        $oResults=$this->rBlogger->getByFilter($request,$statistic);

        return view('admin.blogger.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.blogger.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rBlogger->create($request->all());

        return redirect('admin/blogger');
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


        $blogger=$this->rBlogger->show($id);
      $request->merge(['blogger_id'=>$id,'page_name'=>'page']);



        return view('admin.blogger.show', compact('blogger','request'));
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


        $blogger=$this->rBlogger->show($id);


        return view('admin.blogger.edit', compact('blogger'));
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

        $result=$this->rBlogger->update($id,$request);

        return redirect('admin/blogger');
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
        $blogger=$this->rBlogger->destroy($id);
        return redirect('admin/blogger');
    }


}
