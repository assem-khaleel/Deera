<?php

namespace App\Http\Controllers\admin\coffee_rate;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\coffee_rate\createRequest;
use App\Http\Requests\admin\coffee_rate\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CoffeeRate as mCoffeeRate;
use App\Repositories\admin\coffee_rate\CoffeeRateContract as rCoffeeRate;

 use App\Repositories\admin\users\UsersContract as rUsers;
use App\Repositories\admin\shop\ShopContract as rShop;
use App\Repositories\admin\coffee\CoffeeContract as rCoffee;

class CoffeeRate extends Controller
{
    private $rCoffeeRate;

    public function __construct(rCoffeeRate $rCoffeeRate)
    {
        $this->rCoffeeRate=$rCoffeeRate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCoffeeRate->getByFilter($request);

        return view('admin.coffee_rate.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rShop $rShop,rCoffee $rCoffee)
    {

$usersList=$rUsers->getAllList();
$shopList=$rShop->getAllList();

        $coffeeList=$rCoffee->getAllList();
        return view('admin.coffee_rate.create',compact('request','usersList','shopList','coffeeList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCoffeeRate->create($request->all());

        return Redirect::back();
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


        $coffee_rate=$this->rCoffeeRate->show($id);
      $request->merge(['coffee_rate_id'=>$id,'page_name'=>'page']);



        return view('admin.coffee_rate.show', compact('coffee_rate','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rShop $rShop,rCoffee $rCoffee)
    {


        $coffee_rate=$this->rCoffeeRate->show($id);


 $usersList=$rUsers->getAllList();
        $shopList=$rShop->getAllList();
        $coffeeList=$rCoffee->getAllList();
        return view('admin.coffee_rate.edit', compact('coffee_rate','usersList','shopList','coffeeList'));
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

        $result=$this->rCoffeeRate->update($id,$request);

        return Redirect::back();
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
        $coffee_rate=$this->rCoffeeRate->destroy($id);
        return redirect('admin/coffee_rate');
    }


}
