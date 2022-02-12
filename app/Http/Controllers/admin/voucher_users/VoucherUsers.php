<?php

namespace App\Http\Controllers\admin\voucher_users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\voucher_users\createRequest;
use App\Http\Requests\admin\voucher_users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\VoucherUsers as mVoucherUsers;
use App\Repositories\admin\voucher_users\VoucherUsersContract as rVoucherUsers;


 use App\Repositories\admin\voucher\VoucherContract as rVoucher;
 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\order\OrderContract as rOrder;

class VoucherUsers extends Controller
{
    private $rVoucherUsers;

    public function __construct(rVoucherUsers $rVoucherUsers)
    {
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
        $oResults=$this->rVoucherUsers->getByFilter($request,$statistic);

        return view('admin.voucher_users.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rVoucher $rVoucher,rUsers $rUsers,rOrder $rOrder)
    {

$voucherList=$rVoucher->getAllList();
$usersList=$rUsers->getAllList();
$orderList=$rOrder->getAllList();

        return view('admin.voucher_users.create',compact('request','voucherList','usersList','orderList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rVoucherUsers->create($request->all());

        return redirect('admin/voucher_users');
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


        $voucher_users=$this->rVoucherUsers->show($id);
      $request->merge(['voucher_users_id'=>$id,'page_name'=>'page']);



        return view('admin.voucher_users.show', compact('voucher_users','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rVoucher $rVoucher,rUsers $rUsers,rOrder $rOrder)
    {


        $voucher_users=$this->rVoucherUsers->show($id);


 $voucherList=$rVoucher->getAllList();
 $usersList=$rUsers->getAllList();
 $orderList=$rOrder->getAllList();
        return view('admin.voucher_users.edit', compact('voucher_users','voucherList','usersList','orderList'));
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

        $result=$this->rVoucherUsers->update($id,$request);

        return redirect('admin/voucher_users');
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
        $voucher_users=$this->rVoucherUsers->destroy($id);
        return redirect('admin/voucher_users');
    }


}
