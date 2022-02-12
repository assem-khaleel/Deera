<?php
namespace App\Http\Requests\website\payment_way;

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
    "shop_id"=>'required',
    "payment_way_id"=>'required',
    "setting"=>'required',



        ];
    }
}
