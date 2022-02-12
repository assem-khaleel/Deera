<?php

namespace App\Http\Controllers\admin\blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\blog\createRequest;
use App\Http\Requests\admin\blog\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Blog as mBlog;
use App\Repositories\admin\blog\BlogContract as rBlog;

 use App\Repositories\admin\users\UsersContract as rUsers;
use App\Repositories\admin\blogger\BloggerContract as rBlogger;

class Blog extends Controller
{
    private $rBlog;

    public function __construct(rBlog $rBlog)
    {
        $this->rBlog=$rBlog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rBlog->getByFilter($request,$statistic);

        return view('admin.blog.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rBlogger $rBlogger)
    {

        $usersList=$rUsers->getAllList();
        $bloggerList=$rBlogger->getAllList();

        return view('admin.blog.create',compact('request','usersList','bloggerList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rBlog->create($request->all());

        return redirect('admin/blog');
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


        $blog=$this->rBlog->show($id);
      $request->merge(['blog_id'=>$id,'page_name'=>'page']);



        return view('admin.blog.show', compact('blog','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rBlogger $rBlogger)
    {


        $bloggerList=$rBlogger->getAllList();

        $blog=$this->rBlog->show($id);


 $usersList=$rUsers->getAllList();
        return view('admin.blog.edit', compact('blog','usersList','bloggerList'));
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

        $result=$this->rBlog->update($id,$request);

        return redirect('admin/blog');
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
        $blog=$this->rBlog->destroy($id);
        return redirect('admin/blog');
    }


}
