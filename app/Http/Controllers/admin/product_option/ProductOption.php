<?php

namespace App\Http\Controllers\admin\product_option;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\product_option\createRequest;
use App\Http\Requests\admin\product_option\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ProductOption as mProductOption;
use App\Repositories\admin\product_option\ProductOptionContract as rProductOption;

use App\Repositories\admin\coffee\CoffeeContract as rCoffee;

class ProductOption extends Controller
{
    private $rProductOption;

    public function __construct(rProductOption $rProductOption)
    {
        $this->rProductOption=$rProductOption;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $statistic=null;
        $oResults=$this->rProductOption->getByFilter($request,$statistic);

        return view('admin.product_option.index', compact('oResults','request','statistic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCoffee $rCoffee)
    {

$coffeeList=$rCoffee->getAllList();

        return view('admin.product_option.create',compact('request','coffeeList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request,rCoffee $rCoffee)
    {


        $oResults=$this->rProductOption->create($request->all());
        $coffee=$rCoffee->show($request->coffee_id);
        if($request->price < $coffee->price && $request->option==config('array.product_option_option_size_index')){
            $rCoffee->update($request->coffee_id,['price'=>$request->price]);
        }

        return redirect('admin/product_option?coffee_id='.$request->coffee_id);
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



        return view('admin.product_option.show', compact('product_option','request'));
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
        return view('admin.product_option.edit', compact('product_option','coffeeList'));
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

        return redirect('admin/product_option?coffee_id='.$request->coffee_id);
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

        $product_option=$this->rProductOption->show($id);
        $deleteResult=$this->rProductOption->destroy($id);

        return redirect('admin/product_option?coffee_id='.$product_option->coffee_id);
    }


}
