<?php
namespace App\Http\Requests\admin\coffee;

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
    "name_en"=>'required',
    "name_ar"=>'required',
    "shop_id"=>'required',
    "cuisine_id"=>'required',
    "menu_section_id"=>'required',
    "category_id"=>'required',
   // "delivery_menu_id"=>'required',
            "price"=>'required|numeric',
            "discount"=>'numeric|max:'.$this->price.'|min:0',
    "quantity"=>'required|numeric',
    "img"=>'required',
    "available_from"=>'required',
    "available_to"=>'required',
    //"description_en"=>'required',
    //"description_ar"=>'required',
    "status"=>'required',



        ];
    }
}
