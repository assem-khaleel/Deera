<?php
namespace App\Http\Requests\website\blog;

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

    $this->merge(['users_id'=>current_user()->getUser()->id]);
return [

    "title"=>'required',
    "img"=>'required',
    "description"=>'required',



];
}
}
