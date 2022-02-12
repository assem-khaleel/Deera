<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryMenu extends Model
{
    protected $fillable = [
       "id","name_en","name_ar","shop_id","status","description_en","description_ar","created_at","updated_at"    ];
    protected $table='delivery_menu';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }




public function coffee(){
return $this->hasMany('App\Models\Coffee');
}






}
