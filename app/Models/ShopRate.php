<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRate extends Model
{
    protected $fillable = [
       "id","users_id","shop_id","rate","description","status","notification","created_at","updated_at"    ];
    protected $table='shop_rate';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }








}
