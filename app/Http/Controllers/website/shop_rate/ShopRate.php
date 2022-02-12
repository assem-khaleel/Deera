<?php

namespace App\Http\Controllers\website\shop_rate;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


use App\Models\ShopRate as mShopRate;
use App\Models\Shop as mShop;
use App\Repositories\website\shop_rate\ShopRateContract as rShopRate;

use App\Repositories\website\users\UsersContract as rUsers;
use App\Repositories\website\shop\ShopContract as rShop;

class ShopRate extends Controller
{
    private $rShopRate;

    public function __construct(rShopRate $rShopRate, rShop $rShop)
    {
        $this->rShopRate = $rShopRate;
        $this->rShop = $rShop;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request, rUsers $rUsers, rShop $rShop)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(Request $request)
    {

        $existResult = $this->rShopRate->getByFilter([
            'shop_id' => $request->id,
            'users_id' => current_user()->getUser()->id
        ])->first();

        $rateData = [
            'shop_id' => $request->id,
            'users_id' => current_user()->getUser()->id,
            'status' => config('array.shop_rate_status_pending_index')

        ];
        if (isset($request->rate) && !empty($request->rate)) {
            $rateData['rate'] = $request->rate;
        }
        if (isset($request->description) && !empty($request->description)) {
            $rateData['description'] = $request->description;
        }

        if (count($existResult)) {
            $rateData['status'] = (isset($rateData['description']) && $existResult->description != $rateData['description']) ? 0 : $existResult->status;
            $result = $this->rShopRate->update($existResult->id, $rateData);
        } else {
            $result = $this->rShopRate->create([
                'shop_id' => $request->id,
                'users_id' => current_user()->getUser()->id,
                'rate' => $request->rate,
                'notification' => 0,
                'status' => 0,
                'description' => $request->description
            ]);
        }
        $totalRate = $this->updateShopRate($request->id);
        $shopRate = $this->rShopRate->getByFilter([
            'shop_id' => $request->id,
            'status' => config('array.shop_rate_status_accepted_index')
        ]);
        return new JsonResponse([
            'totalRate' => $totalRate,
            'status' => 'success',
            'message' => view('website.shop_rate.list', compact('shopRate'))->with($rateData)->render()
        ], 200);
    }

    function updateShopRate($shop_id)
    {
        $rate = mShopRate::select([
            DB::raw('count(id) as number'),
            DB::raw('sum(rate) as total')
        ])->where(['shop_id' => $shop_id])->groupBy('shop_id')->first();
        $shopRate = 0;


       if ($rate) {
            $shopRate = $rate->total / $rate->number;

            mShop::where('id','=',$shop_id)->update( ["rating" => $shopRate]);
      }
        return $shopRate;
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


        $shop_rate = $this->rShopRate->show($id);
        $request->merge(['shop_rate_id' => $id, 'page_name' => 'page']);


        return view('website.shop_rate.show', compact('shop_rate', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, rUsers $rUsers, rShop $rShop)
    {


        $shop_rate = $this->rShopRate->show($id);


        $usersList = $rUsers->getAllList();
        $shopList = $rShop->getAllList();
        return view('website.shop_rate.edit', compact('shop_rate', 'usersList', 'shopList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result = $this->rShopRate->update($id, $request);

        return redirect('website/shop_rate');
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
        $shop_rate = $this->rShopRate->destroy($id);
        return redirect('website/shop_rate');
    }


}
