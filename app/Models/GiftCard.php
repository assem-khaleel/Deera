<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    protected $fillable = [
       "id","title_en","title_ar","price","img","description_en","description_ar","discount_type","discount"    ];
    protected $table='gift_card';

    public $timestamps =true ;

    protected $guarded = [];




public function gift_card_users(){
return $this->hasMany('App\Models\GiftCardUsers');
}


public function gift_card_order(){
return $this->hasMany('App\Models\GiftCardOrder');
}






}
