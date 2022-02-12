<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationHour extends Model
{
    protected $fillable = [
       "id","shop_area_id","shop_id","day","shift1_from","shift1_to","shift2_from","shift2_to","created_at","updated_at"    ];
    protected $table='operation_hour';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop_area(){
    return $this->belongsTo('App\Models\ShopArea');
    }

    public function shop(){
    return $this->belongsTo('App\Models\Shop');
    }








}
