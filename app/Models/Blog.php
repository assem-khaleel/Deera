<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
       "id","users_id","title","img","description"    ];
    protected $table='blog';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\Models\Users');
    }

    public function blogger(){
        return $this->belongsTo('App\Models\Blogger','users_id');
    }








}
