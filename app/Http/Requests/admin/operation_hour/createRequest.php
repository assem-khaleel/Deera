<?php
namespace App\Http\Requests\admin\operation_hour;

use App\Http\Requests\Request;

class createRequest extends Request
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
    "shop_area_id"=>'required',
    "shop_id"=>'required',
    "day"=>'required',
    "shift1_from"=>'required',
    "shift1_to"=>'required',
    "shift2_from"=>'required',
    "shift2_to"=>'required',



        ];
    }
}
