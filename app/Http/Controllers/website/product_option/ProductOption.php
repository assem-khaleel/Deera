<?php

namespace App\Http\Controllers\website\product_option;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\product_option\createRequest;
use App\Http\Requests\website\product_option\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ProductOption as mProductOption;
use App\Repositories\website\product_option\ProductOptionContract as rProductOption;

 use App\Repositories\website\coffee\CoffeeContract as rCoffee;

class ProductOption extends Controller
{
    private $rProductOption;
    private $rCoffee;

    public function __construct(rProductOption $rProductOption,rCoffee $rCoffee){

        $this->rProductOption=$rProductOption;
        $this->rCoffee=$rCoffee;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $oCoffee=$this->rCoffee->show($request->coffee_id);
        $statistic=null;
        $oResults=$this->rProductOption->getByFilter($request,$statistic);

        return view('website.product_option.index', compact('oResults','request','oCoffee','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCoffee $rCoffee)
    {


$coffeeList=$rCoffee->getAllList();

        return view('website.product_option.create',compact('request','coffeeList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rProductOption->create($request->all());

        return redirect('website/product_option');
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


        $product_option=$this->rProductOption->show($id);
      $request->merge(['product_option_id'=>$id,'page_name'=>'page']);



        return view('website.product_option.show', compact('product_option','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCoffee $rCoffee)
    {


        $product_option=$this->rProductOption->show($id);


 $coffeeList=$rCoffee->getAllList();
        return view('website.product_option.edit', compact('product_option','coffeeList'));
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

        $result=$this->rProductOption->update($id,$request);

        return redirect('website/product_option');
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
        $product_option=$this->rProductOption->destroy($id);
        return redirect('website/product_option');
    }


}
