<?php
namespace App\Http\Requests\admin\payment_way;

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
        $this->merge(['setting'=>json_encode($this->setting)]);
        return [
    "shop_id"=>'required',
    "payment_way_id"=>'required',
    "setting"=>'required',



        ];
    }
}
