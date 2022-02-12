<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
       "id","first_name","last_name","email","phone","position","file"    ];
    protected $table='career';

    public $timestamps =true ;

    protected $guarded = [];








}
