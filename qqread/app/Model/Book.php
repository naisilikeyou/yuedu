<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='book';
    protected $primaryKey='b_id';
    //白名单
    protected $fillable = ['b_name','a_id','type_id','b_img','is_shelf'];

}