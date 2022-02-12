<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProductOption extends Model
{
    protected $fillable = [
       "id","cart_id","product_option_id"    ];
    protected $table='cart_product_option';

    public $timestamps =false ;

    protected $guarded = [];

    public function cart(){
    return $this->belongsTo('App\Models\Cart');
    }

    public function product_option(){
    return $this->belongsTo('App\Models\ProductOption');
    }








}
