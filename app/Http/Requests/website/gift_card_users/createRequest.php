<?php
namespace App\Http\Requests\website\gift_card_users;

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

    "gift_card_id"=>'required',
            "payment_type"=>'required'



        ];
    }
}
