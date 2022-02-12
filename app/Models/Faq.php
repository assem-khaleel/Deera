<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
       "id","title","body","created_at","updated_at"    ];
    protected $table='faq';

    public $timestamps =true ;

    protected $guarded = [];








}
