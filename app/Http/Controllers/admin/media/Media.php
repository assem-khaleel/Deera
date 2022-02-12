<?php

namespace App\Http\Controllers\admin\media;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\media\createRequest;
use App\Http\Requests\admin\media\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Media as mMedia;
use App\Repositories\admin\media\MediaContract as rMedia;




class Media extends Controller
{
    private $rMedia;

    public function __construct(rMedia $rMedia)
    {
        $this->rMedia=$rMedia;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rMedia->getByFilter($request,$statistic);

        return view('admin.media.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.media.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rMedia->create($request->all());

        return redirect('admin/media');
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


        $media=$this->rMedia->show($id);
      $request->merge(['media_id'=>$id,'page_name'=>'page']);



        return view('admin.media.show', compact('media','request'));
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


        $media=$this->rMedia->show($id);


        return view('admin.media.edit', compact('media'));
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

        $result=$this->rMedia->update($id,$request);

        return redirect('admin/media');
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
        $media=$this->rMedia->destroy($id);
        return redirect('admin/media');
    }


}
