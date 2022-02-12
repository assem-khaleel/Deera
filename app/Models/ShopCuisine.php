<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCuisine extends Model
{
    protected $fillable = [
       "id","shop_id","cuisine_id"    ];
    protected $table='shop_cuisine';

    public $timestamps =false ;

    protected $guarded = [];

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }

    public function cuisine(){
    return $this->belongsTo('App\Models\Cuisine');
    }








}
