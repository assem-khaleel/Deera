<?php

namespace App\Http\Controllers\admin\users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\users\createRequest;
use App\Http\Requests\admin\users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Users as mUsers;
use App\Repositories\admin\users\UsersContract as rUsers;

 use App\Repositories\admin\shop_rate\ShopRateContract as rShopRate;
 use App\Repositories\admin\coffee_rate\CoffeeRateContract as rCoffeeRate;
 use App\Repositories\admin\payment\PaymentContract as rPayment;
 use App\Repositories\admin\cart\CartContract as rCart;
 use App\Repositories\admin\address\AddressContract as rAddress;
 use App\Repositories\admin\order_driver\OrderDriverContract as rOrderDriver;
 use App\Repositories\admin\service_boy\ServiceBoyContract as rServiceBoy;
 use App\Repositories\admin\service_company_order\ServiceCompanyOrderContract as rServiceCompanyOrder;
 use App\Repositories\admin\contact_us\ContactUsContract as rContactUs;
 use App\Repositories\admin\shop_users\ShopUsersContract as rShopUsers;
 use App\Repositories\admin\audit_track\AuditTrackContract as rAuditTrack;

class Users extends Controller
{
    private $rUsers;

    public function __construct(rUsers $rUsers)
    {
        $this->rUsers=$rUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rUsers->getByFilter($request);

        return view('admin.users.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.users.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rUsers->create($request->all());

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rShopRate $rShopRate,rCoffeeRate $rCoffeeRate,rPayment $rPayment,rCart $rCart,rAddress $rAddress,rOrderDriver $rOrderDriver,rServiceBoy $rServiceBoy,rServiceCompanyOrder $rServiceCompanyOrder,rContactUs $rContactUs,rShopUsers $rShopUsers,rAuditTrack $rAuditTrack)
    {


        $users=$this->rUsers->show($id);
      $request->merge(['users_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_shop_rate';
    $oShopRateResults=$rShopRate->getByFilter($request);
    $request->page_name='page_coffee_rate';
    $oCoffeeRateResults=$rCoffeeRate->getByFilter($request);
    $request->page_name='page_payment';
    $oPaymentResults=$rPayment->getByFilter($request);
    $request->page_name='page_cart';
    $oCartResults=$rCart->getByFilter($request);
    $request->page_name='page_address';
    $oAddressResults=$rAddress->getByFilter($request);
    $request->page_name='page_order_driver';
    $oOrderDriverResults=$rOrderDriver->getByFilter($request);
    $request->page_name='page_service_boy';
    $oServiceBoyResults=$rServiceBoy->getByFilter($request);
    $request->page_name='page_service_company_order';
    $oServiceCompanyOrderResults=$rServiceCompanyOrder->getByFilter($request);
    $request->page_name='page_contact_us';
    $oContactUsResults=$rContactUs->getByFilter($request);
    $request->page_name='page_shop_users';
    $oShopUsersResults=$rShopUsers->getByFilter($request);
    $request->page_name='page_audit_track';
    $oAuditTrackResults=$rAuditTrack->getByFilter($request);

        return view('admin.users.show', compact('users','request','oShopRateResults','oCoffeeRateResults','oPaymentResults','oCartResults','oAddressResults','oOrderDriverResults','oServiceBoyResults','oServiceCompanyOrderResults','oContactUsResults','oShopUsersResults','oAuditTrackResults'));
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


        $users=$this->rUsers->show($id);


        return view('admin.users.edit', compact('users'));
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

        $result=$this->rUsers->update($id,$request);

        return redirect('admin/users');
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
        $users=$this->rUsers->destroy($id);
        return redirect('admin/users');
    }


}
