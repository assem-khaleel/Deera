<?php

namespace App\Http\Controllers\admin\voucher;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\voucher\createRequest;
use App\Http\Requests\admin\voucher\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Voucher as mVoucher;
use App\Repositories\admin\voucher\VoucherContract as rVoucher;



class Voucher extends Controller
{
    private $rVoucher;

    public function __construct(rVoucher $rVoucher)
    {
        $this->rVoucher=$rVoucher;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rVoucher->getByFilter($request,$statistic);

        return view('admin.voucher.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.voucher.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rVoucher->create($request->all());

        return redirect('admin/voucher');
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


        $voucher=$this->rVoucher->show($id);
      $request->merge(['voucher_id'=>$id,'page_name'=>'page']);



        return view('admin.voucher.show', compact('voucher','request'));
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


        $voucher=$this->rVoucher->show($id);


        return view('admin.voucher.edit', compact('voucher'));
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

        $result=$this->rVoucher->update($id,$request);

        return redirect('admin/voucher');
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
        $voucher=$this->rVoucher->destroy($id);
        return redirect('admin/voucher');
    }


}
