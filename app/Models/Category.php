<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
       "id","name_en","name_ar","min_quantity","max_quantity","shop_id"    ];
    protected $table='category';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }




public function coffee(){
return $this->hasMany('App\Models\Coffee');
}






}
