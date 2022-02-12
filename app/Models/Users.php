<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $fillable = [
       "email","guest_email","password","permissions","android_device_id","first_name","last_name","avatar",'mobile','phone','Country','gender','area_id','occupation','type','lat','long','birth_day','session_id','blogger'    ];

    protected $table='users';

    public $timestamps =false ;

    protected $guarded = [];

    public function address(){
        return $this->hasMany('\App\Models\Address','users_id');
    }

    public function role(){

        return $this->belongsToMany('App\Models\common\authorization\Roles','role_users','user_id','role_id');
    }

}
