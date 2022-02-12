<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
       "id","code","type","amount","current_amount", "total_number","used_number" ,"status","created_at","updated_at"    ];
    protected $table='voucher';

    public $timestamps =true ;

    protected $guarded = [];








}
