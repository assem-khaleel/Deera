<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftCardUsers extends Model
{
    protected $fillable = [
       "id","sender_id","users_id","gift_card_id","price","status","balance","hash","payment_type",'quantity'    ];
    protected $table='gift_card_users';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\Models\Users');
    }
    public function sender(){
        return $this->belongsTo('App\Models\Users','sender_id');
    }

    public function gift_card(){
    return $this->belongsTo('App\Models\GiftCard');
    }








}
