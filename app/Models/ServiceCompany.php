<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCompany extends Model
{
    protected $fillable = [
       "id","name","created_at","updated_at"    ];
    protected $table='service_company';

    public $timestamps =true ;

    protected $guarded = [];




public function service_boy(){
return $this->hasMany('App\Models\ServiceBoy');
}


public function service_company_order(){
return $this->hasMany('App\Models\ServiceCompanyOrder');
}






}
