<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoffeeRate extends Model
{
    protected $fillable = [
       "id","users_id","coffee_id","rate","description","status","notification","created_at","updated_at"    ];
    protected $table='coffee_rate';

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








}
