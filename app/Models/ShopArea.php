<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopArea extends Model
{
    protected $fillable = [
       "id","area_id","shop_id","delivery_charges","deera_charge","min_amount",
        "expected_deliver_time","deliver_time_from","deliver_time_to","status","governorate_id","created_at","updated_at"    ];
    protected $table='shop_area';

    public $timestamps =true ;

    protected $guarded = [];

    public function area(){
    return $this->belongsTo('App\Models\Area');
    }

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }

    public function governorate(){
    return $this->belongsTo('App\Models\Governorate');
    }




public function operation_hour(){
return $this->hasMany('App\Models\OperationHour');
}






}
