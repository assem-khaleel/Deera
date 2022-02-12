<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    protected $fillable = [
       "id","name","email","phone","shop_id","people_number","book_date","book_time","location","request" ,"status"   ];
    protected $table='catering';

    public $timestamps =true ;

    protected $guarded = [];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }
    public function area(){
        return $this->belongsTo('App\Models\Area','location');
    }








}
