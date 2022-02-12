<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentWay extends Model
{
    protected $fillable = [
       "id","shop_id","payment_way_id","setting","created_at","updated_at"    ];
    protected $table='payment_way';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }








}
