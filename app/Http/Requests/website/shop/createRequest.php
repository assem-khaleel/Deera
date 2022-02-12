<?php
namespace App\Http\Requests\website\shop;

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
                'name_en.required' => trans('customValidation.nameEnRequired'),
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
            "name_en"=>'required',

            "Owner_first_name"=>'required',
            "email"=>'required|email',

            "telephone"=>'required|numeric',
            "url"=>'required',
            "instagram"=>'required',




        ];
    }
}
