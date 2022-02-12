<?php
namespace App\Http\Requests\admin\media;

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
        if(isset($this->img) ){
        $this->merge(['img'=>join(',',$this->img)]);
        }
        return [
    "title_en"=>'required',
    "title_ar"=>'required',
    "img"=>'required',
    "link"=>'required',
    "description_en"=>'required',
    "description_ar"=>'required',



        ];
    }
}
