<?php

namespace App\Http\Controllers\website\voucher;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\website\voucher\createRequest;
use App\Http\Requests\website\voucher\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Voucher as mVoucher;
use App\Repositories\website\voucher\VoucherContract as rVoucher;
use App\Repositories\admin\voucher_users\VoucherUsersContract as rVoucherUsers;
use App\Models\VoucherUsers as mVoucherUsers;



class Voucher extends Controller
{
    private $rVoucher;
private  $rVoucherUsers;
    public function __construct(rVoucher $rVoucher,rVoucherUsers $rVoucherUsers)
    {
        $this->rVoucher=$rVoucher;
        $this->rVoucherUsers=$rVoucherUsers;
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

        return view('website.voucher.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('website.voucher.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rVoucher->getByCode($request->code);

        if(count($oResults) && $oResults->status==config('array.voucher_status_active_index') && $oResults->total_number > $oResults->used_number){

            $oVoucherUsersResult=mVoucherUsers::where(['voucher_id'=>$oResults->id,'users_id'=>current_user()->getUser()->id])->get();

            if(count($oVoucherUsersResult)){

                return new JsonResponse(['status'=>'error','messages'=>'You have used this code before .'],200);
            }else{

                return new JsonResponse(['status'=>'success','voucher' => $oResults->toArray()],200);
            }
        }elseif(count($oResults) && $oResults->status==config('array.voucher_status_active_index') && $oResults->total_number <= $oResults->used_number){

            return new JsonResponse(['status'=>'error','messages'=>'Sorry this Voucher Code reaches the maximum using number.'],200);
        }else{
            return new JsonResponse(['status'=>'error','messages'=>'Incorrect Voucher Code .'],200);

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


        $voucher=$this->rVoucher->show($id);
      $request->merge(['voucher_id'=>$id,'page_name'=>'page']);



        return view('website.voucher.show', compact('voucher','request'));
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


        return view('website.voucher.edit', compact('voucher'));
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

        return redirect('website/voucher');
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
        return redirect('website/voucher');
    }


}
