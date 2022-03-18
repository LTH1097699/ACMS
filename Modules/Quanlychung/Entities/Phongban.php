<?php

namespace Modules\Quanlychung\Entities;


use Illuminate\Database\Eloquent\Model;

class Phongban extends Model
{
    

    protected $table = 'phongban';
   
    protected $fillable = [
        'maphong',
        'tenphong',
        'dienthoai',
    ];
}
