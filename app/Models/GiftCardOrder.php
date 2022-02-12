<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftCardOrder extends Model
{
    protected $fillable = [
       "id","order_id","gift_card_id","status"    ];
    protected $table='gift_card_order';

    public $timestamps =true ;

    protected $guarded = [];

    public function order(){
    return $this->belongsTo('App\Models\Order');
    }

    public function gift_card(){
    return $this->belongsTo('App\Models\GiftCard');
    }








}
