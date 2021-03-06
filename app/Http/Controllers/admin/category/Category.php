<?php

namespace App\Http\Controllers\admin\category;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\category\createRequest;
use App\Http\Requests\admin\category\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Category as mCategory;
use App\Repositories\admin\category\CategoryContract as rCategory;

 use App\Repositories\admin\shop\ShopContract as rShop;
 use App\Repositories\admin\coffee\CoffeeContract as rCoffee;

class Category extends Controller
{
    private $rCategory;

    public function __construct(rCategory $rCategory)
    {
        $this->rCategory=$rCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCategory->getByFilter($request);

        return view('admin.category.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rShop $rShop)
    {

$shopList=$rShop->getAllList();

        return view('admin.category.create',compact('request','shopList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCategory->create($request->all());

        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCoffee $rCoffee)
    {


        $category=$this->rCategory->show($id);
      $request->merge(['category_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_coffee';
    $oCoffeeResults=$rCoffee->getByFilter($request);

        return view('admin.category.show', compact('category','request','oCoffeeResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rShop $rShop)
    {


        $category=$this->rCategory->show($id);


 $shopList=$rShop->getAllList();
        return view('admin.category.edit', compact('category','shopList'));
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

        $result=$this->rCategory->update($id,$request);

        return redirect('admin/category');
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
        $category=$this->rCategory->destroy($id);
        return redirect('admin/category');
    }


}
