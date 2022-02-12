<?php
namespace App\Http\Requests\website\catering;

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



    public function messages(){

        return [
            'people_number.required' =>'No. of guests should be a number',
            'people_number.numeric' =>'No. of guests should be a number',
//                'email.unique' => 'Email already taken m8',
        ];

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
    "email"=>'required|email',
    "phone"=>'required|numeric',
    "shop_id"=>'required|numeric',
    "people_number"=>'required|numeric',
    "book_date"=>'required',
    "book_time"=>'required',
    "location"=>'required',
    "request"=>'required',



        ];
    }
}
