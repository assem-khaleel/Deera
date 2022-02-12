<?php

namespace App\Http\Controllers\website\coffee_rate;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


use App\Models\CoffeeRate as mCoffeeRate;
use App\Models\Coffee as mCoffee;
use App\Repositories\website\coffee_rate\CoffeeRateContract as rCoffeeRate;

use App\Repositories\website\users\UsersContract as rUsers;
use App\Repositories\website\coffee\CoffeeContract as rCoffee;

class CoffeeRate extends Controller
{
    private $rCoffeeRate;

    public function __construct(rCoffeeRate $rCoffeeRate, rCoffee $rCoffee)
    {
        $this->rCoffeeRate = $rCoffeeRate;
        $this->rCoffee = $rCoffee;
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
    public function create(Request $request, rUsers $rUsers, rCoffee $rCoffee)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(Request $request)
    {

        $existResult = $this->rCoffeeRate->getByFilter([
            'coffee_id' => $request->id,
            'users_id' => current_user()->getUser()->id
        ])->first();

        $rateData = [
            'coffee_id' => $request->id,
            'users_id' => current_user()->getUser()->id,
            'notification'=>0,
            'status' => config('array.coffee_rate_status_pending_index')

        ];
        if (isset($request->rate) && !empty($request->rate)) {
            $rateData['rate'] = $request->rate;
        }
        if (isset($request->description) && !empty($request->description)) {
            $rateData['description'] = $request->description;
        }

        if (count($existResult)) {
            $rateData['status'] = (isset($rateData['description']) && $existResult->description != $rateData['description']) ? 0 : $existResult->status;
            $result = $this->rCoffeeRate->update($existResult->id, $rateData);
        } else {
            $result = $this->rCoffeeRate->create([
                'coffee_id' => $request->id,
                'users_id' => current_user()->getUser()->id,
                'rate' => $request->rate,
                'notification' => 0,
                'status' => 0,
                'description' => $request->description
            ]);
        }
        $totalRate = $this->updateCoffeeRate($request->id);
        $coffeeRate = $this->rCoffeeRate->getByFilter([
            'coffee_id' => $request->id,
            'status' => config('array.coffee_rate_status_accepted_index')
        ]);
        return new JsonResponse([
            'totalRate' => $totalRate,
            'status' => 'success',
            'message' => view('website.coffee_rate.list', compact('coffeeRate'))->with($rateData)->render()
        ], 200);
    }

    function updateCoffeeRate($coffee_id)
    {
        $rate = mCoffeeRate::select([
            DB::raw('count(id) as number'),
            DB::raw('sum(rate) as total')
        ])->where(['coffee_id' => $coffee_id])->groupBy('coffee_id')->first();
        $coffeeRate = 0;


       if ($rate) {
            $coffeeRate = $rate->total / $rate->number;

            mCoffee::where('id','=',$coffee_id)->update( ["rating" => $coffeeRate]);
      }
        return $coffeeRate;
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


        $coffee_rate = $this->rCoffeeRate->show($id);
        $request->merge(['coffee_rate_id' => $id, 'page_name' => 'page']);


        return view('website.coffee_rate.show', compact('coffee_rate', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return view
     */
    public function edit($id, rUsers $rUsers, rCoffee $rCoffee)
    {


        $coffee_rate = $this->rCoffeeRate->show($id);


        $usersList = $rUsers->getAllList();
        $coffeeList = $rCoffee->getAllList();
        return view('website.coffee_rate.edit', compact('coffee_rate', 'usersList', 'coffeeList'));
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

        $result = $this->rCoffeeRate->update($id, $request);

        return redirect('website/coffee_rate');
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
        $coffee_rate = $this->rCoffeeRate->destroy($id);
        return redirect('website/coffee_rate');
    }


}
