<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
       "id","name_en","name_ar","branch","Owner_first_name","Owner_last_name","email",
        "available_payment","telephone","address_en","address_ar","description_en",
        "description_ar","status","min_amount",
        "expected_deliver_time",
        "working_hour_from","working_hour_to",
        "deliver_time_from","deliver_time_to","deliver_charge","rating","show_menu",
        "order_accept_days","offline_order","summary_en","summary_ar","url","img","commission_type","discount_type","discount","area_id","follow_us","notification","long",'lat'

,"schedule_commission","service_charge","deliver_type","pickup_interval",
        "instagram",
    ];
    protected $table='shop';

    public $timestamps =true ;

    protected $guarded = [];

    public function area(){
    return $this->belongsTo('App\Models\Area');
    }




public function category(){
return $this->hasMany('App\Models\Category');
}


public function delivery_menu(){
return $this->hasMany('App\Models\DeliveryMenu');
}


public function shop_rate(){
return $this->hasMany('App\Models\ShopRate');
}


public function shop_cuisine(){
return $this->hasMany('App\Models\ShopCuisine');
}


public function menu_section(){
return $this->hasMany('App\Models\MenuSection');
}


public function coffee(){
return $this->hasMany('App\Models\Coffee');
}


public function coffee_rate(){
return $this->hasMany('App\Models\CoffeeRate');
}


public function shop_area(){
return $this->hasMany('App\Models\ShopArea');
}


public function operation_hour(){
return $this->hasMany('App\Models\OperationHour');
}


public function cart(){
return $this->hasMany('App\Models\Cart');
}


    public function shop_users(){
        return $this->hasMany('App\Models\ShopUsers');
    }
    public function branch(){
        return $this->belongsTo('App\Models\Shop','branch');
    }


public function isClose(){
//   return false;
    $current_hour=time();

    $current_hour = date("H:i",strtotime('+180 minutes',$current_hour));
  // dd( ($this->working_hour_from .'<='. $current_hour .'&&'. $this->working_hour_to .'>='. $current_hour .'&&'. $this->status .'=='. config('array.shop_status_open_index')));
    return ($this->working_hour_from <= $current_hour && $this->working_hour_to >=$current_hour && $this->status == config('array.shop_status_open_index'))? false:true;
}



}
