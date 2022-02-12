<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
       "id","title_en","title_ar","img","link","description_en","description_ar"    ];
    protected $table='media';

    public $timestamps =true ;

    protected $guarded = [];








}
