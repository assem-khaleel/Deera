<?php
namespace App\Http\Requests\website\offer;

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
    "title_en"=>'required',
    "title_ar"=>'required',
    "img"=>'required',
    "description_en"=>'required',
    "description_ar"=>'required',



];
}
}
