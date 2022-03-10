<?php

namespace Modules\Quanlychung\Entities;


use Illuminate\Database\Eloquent\Model;

class hopdong extends Model
{
 

    protected $table = 'hopdong';
   
    protected $fillable = [
        'sohopdong',
        'manhanvien',
        'ngayki',
        'ngayketthuc',
        'ngaybatdau',
    ];
}
