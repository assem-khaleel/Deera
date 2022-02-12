<?php

namespace App\Http\Controllers\website\contact_us;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\website\contact_us\createRequest;
use App\Http\Requests\website\contact_us\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ContactUs as mContactUs;
use App\Repositories\website\contact_us\ContactUsContract as rContactUs;

use App\Repositories\website\users\UsersContract as rUsers;

use Illuminate\Http\JsonResponse;

class ContactUs extends Controller
{
    private $rContactUs;

    public function __construct(rContactUs $rContactUs)
    {
        $this->rContactUs = $rContactUs;
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
    public function create(Request $request)
    {


        return view('website.contact_us.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults = $this->rContactUs->create($request->all());


        @\Mail::send('website.contact_us.email', ['request'=>$request], function($message) use($request)
        {

            $message->from('info@cofedistrict.com', 'Cofe District  -Contact Us');


            $message->to($request->email);
//            $message->cc('taylorsuccessor@gmail.com');


        });

        if ($request->ajax()) {
            return new JsonResponse(['status' => 'success'], 200);


        } else {
            return Redirect::to('/contact_us/create?status=success');
            return Redirect::back();
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
    public function edit($id, rUsers $rUsers)
    {


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
    }


}
