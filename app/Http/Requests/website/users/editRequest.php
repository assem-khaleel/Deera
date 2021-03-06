<?php
namespace App\Http\Requests\website\users;

use App\Http\Requests\Request;

class editRequest extends Request
{
/**
* Determine if the user is authorized to make this request.
*
* @return bool
*/
public function authorize()
{
return true;
}

/**
* Get the validation rules that apply to the request.
*
* @return array
*/
public function rules()
{
return [

    "first_name"=>'required',
    "last_name"=>'required',
    "email"=>'required|email',
    "password"=>'confirmed',
    'password_confirmation'=> '',
    "phone"=>'required|min:4|numeric',
    "gender"=>'required',

    //   "first_name"=>'required',
   // "last_name"=>'required',


 //   "email"=>'required',
 //   "mobile"=>'required',
    //"phone"=>'required|numeric',
    //"gender"=>'required',



];
}
}
