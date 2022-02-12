<?php

namespace App\Http\Controllers\website\blogger;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\blogger\createRequest;
use App\Http\Requests\website\blogger\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Blogger as mBlogger;
use App\Repositories\website\blogger\BloggerContract as rBlogger;


use Illuminate\Http\JsonResponse;

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

        $statistic=null;
        $oResults=$this->rBlogger->getByFilter($request,$statistic);

        return view('website.blogger.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('website.blogger.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rBlogger->create($request->all());

        return new JsonResponse(['status'=>'success'], 200);

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



        return view('website.blogger.show', compact('blogger','request'));
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


        return view('website.blogger.edit', compact('blogger'));
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

        return redirect('website/blogger');
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
        return redirect('website/blogger');
    }


}
