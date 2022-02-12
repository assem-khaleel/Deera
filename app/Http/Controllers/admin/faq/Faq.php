<?php

namespace App\Http\Controllers\admin\faq;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\faq\createRequest;
use App\Http\Requests\admin\faq\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Faq as mFaq;
use App\Repositories\admin\faq\FaqContract as rFaq;



class Faq extends Controller
{
    private $rFaq;

    public function __construct(rFaq $rFaq)
    {
        $this->rFaq=$rFaq;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rFaq->getByFilter($request,$statistic);

        return view('admin.faq.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.faq.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rFaq->create($request->all());

        return redirect('admin/faq');
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


        $faq=$this->rFaq->show($id);
      $request->merge(['faq_id'=>$id,'page_name'=>'page']);



        return view('admin.faq.show', compact('faq','request'));
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


        $faq=$this->rFaq->show($id);


        return view('admin.faq.edit', compact('faq'));
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

        $result=$this->rFaq->update($id,$request);

        return redirect('admin/faq');
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
        $faq=$this->rFaq->destroy($id);
        return redirect('admin/faq');
    }


}
