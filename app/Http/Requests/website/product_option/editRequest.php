<?php
namespace App\Http\Requests\website\product_option;

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
    "coffee_id"=>'required',
    "option"=>'required',
    "name_en"=>'required',
    "name_ar"=>'required',



];
}
}
