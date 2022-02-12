<?php

namespace App\Http\Controllers\website\cart;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\cart\createRequest;
use App\Http\Requests\website\cart\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Cart as mCart;
use App\Models\Order as mOrder;
use App\Models\CartProductOption as mCartProductOption;
use App\Models\ProductOption as mProductOption;
use App\Repositories\website\cart\CartContract as rCart;

use Illuminate\Http\JsonResponse;

use App\Repositories\website\coffee\CoffeeContract as rCoffee;
use App\Repositories\website\order\OrderContract as rOrder;

use App\Repositories\website\product_option\ProductOptionContract as rProductOption;

use App\Repositories\website\gift_card_users\GiftCardUsersContract as rGiftCardUsers;

use Barryvdh\DomPDF\Facade as PDF;

class Cart extends Controller
{
    private $rCart;
    private $rCoffee;
    private $rOrder;
    private $rProductOption;

    public function __construct(rCart $rCart, rCoffee $rCoffee, rOrder $rOrder, rProductOption $rProductOption)
    {
        $this->rCart = $rCart;
        $this->rCoffee = $rCoffee;
        $this->rOrder = $rOrder;
        $this->rProductOption = $rProductOption;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request, rGiftCardUsers $rGiftCardUsers)
    {

        $filterData = [];

        if (isset($request->order_id)) {
            $filterData['id'] = $request->order_id;
        } else {

            $filterData['status'] = config('array.order_status_pending_index');
            $filterData['users_id'] = (isset(current_user()->getUser()->id)) ? current_user()->getUser()->id : 0;
           $filterData['isParent'] = 1;

        }
        $oOrders = $this->rOrder->getByFilter($filterData);

//        dd($oOrders);

        if ($request->ajax() && isset($request->getQuantity)) {

            $total = 0;
            foreach ($oOrders as $oOrder) {

                foreach ($oOrder->cart as $cart) {
                    $total += $cart->quantity;
                }
            }

            return new JsonResponse(['status' => 'success', 'quantity' => $total], 200);
        }

        if ($request->ajax()) {
            $view = 'website.cart.index';
        } else {

            $view = 'website.cart.receipt';
            //       $pdf = PDF::loadView( $view,compact('oOrders'));
            // return $pdf->download('invoice.pdf');


        }

        $giftCards = $rGiftCardUsers->getByFilter(['users_id' => isset(current_user()->getUser()->id) ? current_user()->getUser()->id : 0, 'status' => [config('array.gift_card_users_status_pending_index')]]);

        return view($view, compact('oOrders', 'giftCards'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request, rCoffee $rCoffee, rProductOption $rProductOption)
    {

        $oCoffee = $rCoffee->show($request->coffee_id);
        $statistic = null;
        // $oResults=$this->rProductOption->getByFilter($request,$statistic);

        return view('website.cart.create', compact('request', 'oCoffee', 'statistic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

        if (!isset(current_user()->getUser()->id)) {
            current_user()->greatGestUser();
        }

        $users_id = current_user()->getUser()->id;
        $deliver_type = Session::has('deliver_type') ? Session::get('deliver_type') : config('array.shop_deliver_type_pickup_index');

        $coffee_ids = (is_array($request->coffee_id)) ? $request->coffee_id : [$request->coffee_id];
        $errors = [];
        foreach ($coffee_ids as $index => $coffee_id) {
            $oCoffee = $this->rCoffee->show($coffee_id);
            $shop_id = $oCoffee->shop_id;

            $oCurrentOrder = mOrder::where([
                'users_id' => $users_id,
                'shop_id' => $shop_id,
                'status' => config('array.order_status_pending_index'),
                'deliver_type' => $deliver_type,
                'parent_id'=>0
            ])->first();

            $order_id = 0;
            if (!isset($oCurrentOrder->id)) {
                $oOrder = mOrder::create([
                    'users_id' => $users_id,
                    'shop_id' => $shop_id,
                    'status' => config('array.order_status_pending_index'),
                    'deliver_type' => $deliver_type,
                    'parent_id'=>0
                ]);
                //$oOrder->save();
                $order_id = $oOrder->id;
            } else {
                $order_id = $oCurrentOrder->id;
            }

            $oneError = $this->addProductToOrder($request, $order_id, $coffee_id);
            if (is_string($oneError) && strlen($oneError) > 0) {
                $errors[] = $oneError;
            }


        }

        $request->merge(['order_id' => $order_id]);

        if (count($errors)) {

            return new JsonResponse(['status' => 'error', 'messages' => $errors], 422);
        }
        if ($request->ajax()) {
            return new JsonResponse(['status' => 'success', ''], 200);

        } else {
            if (isset($request->redirectToOrder)) {
                return Redirect::to('/order?order_id=' . $request->redirectToOrder);
            }
            return Redirect::back();
        }


    }


    public function addProductToOrder($request, $order_id, $coffee_id)
    {

        $users_id = current_user()->getUser()->id;
        $quantity = 1;
        if (isset($request->quantity) && isset($request->quantity[$coffee_id])) {
            $quantity = $request->quantity[$coffee_id];
        } elseif (isset($request->quantity) && $request->quantity > 0) {
            $quantity = $request->quantity;
        }


        $size_id = 0;
        if (isset($request->size_id[$coffee_id])) {
            $size_id = $request->size_id[$coffee_id];
        } elseif (!is_array($request->quantity) && $request->size_id > 0) {
            $size_id = $request->size_id;
        }


        $oOrder = $this->rOrder->show($order_id);
        $oCoffee = $this->rCoffee->show($coffee_id);

        if ($quantity > $oCoffee->quantity) {
            return ' Sorry,No enough quantity available now. ';
        }

        $optionPrice = [];
        if ($size_id > 0) {

            $optionPrice = $this->rProductOption->getByFilter(['id' => $size_id]);
        }


        $price = 0;
        if (count($optionPrice)) {
            $price = $optionPrice->first()->price;

        } else {
            $price = $oCoffee->price;
        }
        $oCart = mCart::where(['users_id' => $users_id, 'order_id' => $order_id, 'size_id' => $size_id, 'coffee_id' => $coffee_id])->first();

        if (count($oCart)) {
            $oCart->quantity += $quantity;

            $oCart->save();
        } else {

            $oCart = mCart::create([
                'users_id' => $users_id,
                "shop_id" => $oOrder->shop_id,
                'order_id' => $order_id,
                'coffee_id' => $coffee_id,
                'unit_price' => $price,
                'quantity' => $quantity,
                'size_id' => $size_id,
                'special_request' => ((isset($request->special_request)) ? $request->special_request : '')

            ]);
            $oCart->save();

        }

        mCartProductOption::where(['cart_id' => $oCart->id])->delete();

        if (isset($request->additional) && is_array($request->additional)) {

            foreach ($request->additional as $product_option_id => $additionalPrice) {
                mCartProductOption::create(['cart_id' => $oCart->id, 'product_option_id' => $product_option_id]);
            }

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function show($id, Request $request)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, Request $request)
    {

        $result = $this->rCart->update($id, $request);

        return new JsonResponse(['status' => 'success'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function update($id, Request $request)
    {
//        if(count([3])){
//
//            return new JsonResponse(['status' => 'error','messages'=> ' Sorry,No enough quantity available now. '], 422);
//        }
        if ($request->quantity < 1) {
            $request->quantity = 1;
        }

        $cart = $this->rCart->show($id);
        $result = $this->rCart->update($id, $request);


        return new JsonResponse(['status' => 'success', 'upOrDown' => (($cart->quantity > $request->quantity) ? 'down' : 'up')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $cart = $this->rCart->destroy($id);
        return Redirect::back();
    }


    public function receipt_pdf(Request $request, rGiftCardUsers $rGiftCardUsers)
    {

        $filterData = [];

//        if(isset($request->order_id)){
        $filterData['id'] = $request->order_id;
//        }else{
//
//            $filterData['status']=config('array.order_status_pending_index');
//            $filterData['users_id']=(isset(current_user()->getUser()->id))?current_user()->getUser()->id:0;
//        }
        $oOrders = $this->rOrder->getByFilter($filterData);

        //if($request->ajax()){
        //        $view='website.cart.index';
        // }else{

        $view = 'website.cart.receipt';
        $pdf = PDF::loadView($view, compact('oOrders'));
        return $pdf->download('invoice.pdf');


        //  }

    }

}
