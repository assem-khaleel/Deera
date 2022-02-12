<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $fillable = [
       "id","coffee_id","option","name_en","name_ar","price"    ];
    protected $table='product_option';

    public $timestamps =true ;

    protected $guarded = [];

    public function coffee(){
    return $this->belongsTo('App\Models\Coffee');
    }








}
