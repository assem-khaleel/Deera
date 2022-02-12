<?php
namespace App\Http\Requests\admin\gift_card;

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
    "title_en"=>'required',
    "title_ar"=>'required',
    "price"=>'required',
    "img"=>'required',
    "description_en"=>'required',
    "description_ar"=>'required',
    "discount_type"=>'required',
    "discount"=>'required',



];
}
}
