<?php
namespace App\Http\Requests\website\career;

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
    "email"=>'required',
    "phone"=>'required',
    "position"=>'required',
    "file"=>'required',



];
}
}
