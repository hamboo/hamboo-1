<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hamboo extends Model
{
    protected $table = 'db_booking';
    protected $fillable = ['from_date','to_date','duration_play','id_user','id_futsal','id_field','id_price','status','created_at','updated_at'];
}
