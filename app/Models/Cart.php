<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
       "id","users_id","shop_id","coffee_id","order_id","deliver_charge","quantity","unit_price","total_price","special_request","size_id","created_at","updated_at"    ];
    protected $table='cart';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }

    public function coffee(){
    return $this->belongsTo('App\Models\Coffee');
    }

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }

    public function size(){
        return $this->belongsTo('App\Models\ProductOption','size_id');
    }



    public function product_option(){
        return $this->hasMany('App\Models\CartProductOption');
    }



    public function product_option_one_total(){

        $oResults= self::join('cart_product_option','cart_product_option.cart_id','=','cart.id')
            ->join('product_option','cart_product_option.product_option_id','=','product_option.id')
            ->distinct('cart.id')
            ->where('cart.id','=',$this->id)
            ->select(['product_option.price','cart.quantity'])->get();

        $total=0;
        if(count($oResults)){
            foreach($oResults as $oResult){
                $total+=floatval($oResult->price) ;
            }
        }

        return $total;

    }



}
