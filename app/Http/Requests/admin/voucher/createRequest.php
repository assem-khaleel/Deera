<?php
namespace App\Http\Requests\admin\voucher;

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
    "code"=>'required',
    "type"=>'required',
//    "amount"=>'required',
            "total_number"=>"numeric",
            "used_number"=>"numeric|max:".$this->total_number,
    "current_amount"=>'required',
    "status"=>'required',



        ];
    }
}
