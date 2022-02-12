<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
       "id","name_en","name_ar","shop_id","cuisine_id","menu_section_id","category_id","delivery_menu_id","parent_id","price","quantity","img","discount","available_from","available_to","description_en","description_ar","status","rating","created_at","updated_at"    ];
    protected $table='coffee';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }

    public function cuisine(){
    return $this->belongsTo('App\Models\Cuisine');
    }

    public function menu_section(){
    return $this->belongsTo('App\Models\MenuSection');
    }

    public function category(){
    return $this->belongsTo('App\Models\Category');
    }

    public function delivery_menu(){
    return $this->belongsTo('App\Models\DeliveryMenu');
    }




public function cart(){
return $this->hasMany('App\Models\Cart');
}




    public function size(){
        return $this->hasMany('App\Models\ProductOption','coffee_id')->where('product_option.option','=',config('array.product_option_option_size_index'));
    }




    public function additional(){
        return $this->hasMany('App\Models\ProductOption','coffee_id')->where('product_option.option','=',config('array.product_option_option_additional_index'));
    }

    public function priceWithDiscount(){
        $priceWithDiscount=floatval($this->price) - floatval($this->discount);


        return ($priceWithDiscount < 0)? 0:$priceWithDiscount;
    }


}
