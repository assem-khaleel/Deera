<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopUsers extends Model
{
    protected $fillable = [
       "id","users_id","shop_id","status","type","license","civil_id","role","is_cofe","created_at","updated_at"    ];
    protected $table='shop_users';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

//    public function order()
//    {
//         $this->primaryKey = 'users_id';
//        return $this->belongsToMany('App\Models\Order', 'order_driver', 'users_id', 'order_id','users_id');
//    }



}
