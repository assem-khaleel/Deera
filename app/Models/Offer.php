<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
       "id","coffee_id","title_en","title_ar","img","description_en","description_ar"    ];
    protected $table='offer';

    public $timestamps =true ;

    protected $guarded = [];

    public function coffee(){
    return $this->belongsTo('App\Models\Coffee');
    }








}
