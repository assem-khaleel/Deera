<?php
namespace App\Http\Requests\admin\gift_card_users;

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
    "sender_id"=>'required',
    "users_id"=>'required',
    "gift_card_id"=>'required',
    "price"=>'required',
    "status"=>'required',



        ];
    }
}
