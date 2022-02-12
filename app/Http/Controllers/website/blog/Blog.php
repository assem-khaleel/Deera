<?php

namespace App\Http\Controllers\website\blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\blog\createRequest;
use App\Http\Requests\website\blog\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Blog as mBlog;
use App\Repositories\website\blog\BlogContract as rBlog;

use App\Repositories\website\users\UsersContract as rUsers;

use App\Repositories\website\blogger\BloggerContract as rBlogger;

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
    public function index(Request $request,rUsers $rUsers,rBlogger $rBlogger)
    {

        $statistic=null;
        $oResults=$this->rBlog->getByFilter($request,$statistic);


//        $usersList=$rUsers->getAllList(['blogger'=>config('array.users_blogger_completed_index')]);

        $bloggerList=$rBlogger->getAllList();
        return view('website.blog.index', compact('oResults','request','statistic','bloggerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers)
    {

        $usersList=$rUsers->getAllList();

        return view('website.blog.create',compact('request','usersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $cFile=new \App\Http\Controllers\common\files\FilesController();
        $uploadResult=$cFile->postUploadInput('img','files/blog',['gif','jpg','jpeg','jfif','bmp','png'] );

        if(isset($uploadResult['status']) && $uploadResult['status'] == 'success'){

            $oResults=$this->rBlog->create($request->except(['img'])+['img'=>'/'.$uploadResult['file']]);

            return redirect('/blog');
        }else{
            return redirect('/blog')->withErrors($uploadResult);
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


        $blog=$this->rBlog->show($id);
        $request->merge(['blog_id'=>$id,'page_name'=>'page']);



        return view('website.blog.show', compact('blog','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers)
    {


        $blog=$this->rBlog->show($id);


        $usersList=$rUsers->getAllList();
        return view('website.blog.edit', compact('blog','usersList'));
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

        return redirect('website/blog');
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
        return redirect('website/blog');
    }

    public function getBecomeBlogger(rUsers $rUsers){
        if(isset(current_user()->getUser()->id)){
            $rUsers->update(current_user()->getUser()->id,['blogger'=>config('array.users_blogger_request_index')]);

            return trans('website.bloggerRequestThanx');
        }
        return trans('website.signInFirst');
    }
}
