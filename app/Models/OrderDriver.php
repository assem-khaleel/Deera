<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDriver extends Model
{
    protected $fillable = [
       "id","users_id","order_id","current_long","current_lat","status","note","notification","created_at","updated_at"    ];
    protected $table='order_driver';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function order(){
    return $this->belongsTo('App\Models\Order');
    }








}
