<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $fillable = [
       "id","name_en","name_ar","status","description_en","description_ar","created_at","updated_at"    ];
    protected $table='cuisine';

    public $timestamps =true ;

    protected $guarded = [];




public function shop_cuisine(){
return $this->hasMany('App\Models\ShopCuisine');
}


public function coffee(){
return $this->hasMany('App\Models\Coffee');
}






}
