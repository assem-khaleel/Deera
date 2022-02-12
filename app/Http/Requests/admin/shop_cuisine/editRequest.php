<?php
namespace App\Http\Requests\admin\shop_cuisine;

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
    "shop_id"=>'required',
    "cuisine_id"=>'required',



];
}
}
