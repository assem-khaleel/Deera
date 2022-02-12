<?php
namespace App\Http\Requests\admin\catering;

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
    "name"=>'required',
    "email"=>'required',
    "phone"=>'required',
    "shop_id"=>'required',
    "people_number"=>'required',
    "book_date"=>'required',
    "book_time"=>'required',
    "location"=>'required',
    "request"=>'required',



        ];
    }
}
