<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Knet as mKnet;

class Order extends Model
{
    protected $fillable = [
       "id","success_order_id","users_id","shop_id","area_id","from_id","address_id","order_time","deliver_time","pickup_period","expected_time","deliver_date","note","deliver_charge","deera_charge","extra_charge","sub_total","total",  "rate","point","status","notification",'deliver_type',"branch","parent_id","origin_order_id","created_at","updated_at"    ];
    protected $table='order';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }
    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
    public function area(){
    return $this->belongsTo('App\Models\Area');
    }

    public function address(){
    return $this->belongsTo('App\Models\Address');
    }

    public function children(){

        return $this->hasMany('App\Models\Order','parent_id');
    }

    public function parent(){

        return $this->belongsTo('App\Models\Order','parent_id');
    }


    public function cart(){
        return $this->hasMany('App\Models\Cart','order_id');
    }



    public function payment(){
        return $this->hasMany('App\Models\Payment');
    }

    public function branch(){
        return $this->belongsTo('App\Models\Shop','branch');
    }



    public function product_option_total(){

        $oResults= self::join('cart','cart.order_id','=','order.id')
            ->join('cart_product_option','cart_product_option.cart_id','=','cart.id')
            ->join('product_option','cart_product_option.product_option_id','=','product_option.id')
            ->distinct('cart.id')
            ->where('order.id','=',$this->id)
            ->select(['product_option.price','cart.quantity'])->get();

        $total=0;
        if(count($oResults)){
            foreach($oResults as $oResult){
                $total+=floatval($oResult->price) * floatval($oResult->quantity);
            }
        }

        return $total;

    }

    public function new_success_order_id(){
        $oResults=Order::where('shop_id','=',$this->shop_id)->max('success_order_id');
//dd($oResults);
        $oResults=ltrim($oResults,$this->shop_id);
        return $this->shop_id.'000'.(floatval($oResults)*1 + 1 );
    }

    public function transaction_id(){
        $oKnet=mKnet::where(['order_id'=>$this->success_order_id,])->first();

            return count($oKnet)?$oKnet->TranID:'';

    }


}
