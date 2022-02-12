<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherUsers extends Model
{
    protected $fillable = [
       "id","voucher_id","users_id","order_id","created_at","updated_at"    ];
    protected $table='voucher_users';

    public $timestamps =true ;

    protected $guarded = [];

    public function voucher(){
    return $this->belongsTo('App\Models\Voucher');
    }

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function order(){
    return $this->belongsTo('App\Models\Order');
    }








}
