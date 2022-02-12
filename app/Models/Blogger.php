<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogger extends Model
{
    protected $fillable = [
       "id","name","phone","email","facebook_account","twitter_account","linkedin_account","status","created_at","updated_at"    ];
    protected $table='blogger';

    public $timestamps =true ;

    protected $guarded = [];








}
