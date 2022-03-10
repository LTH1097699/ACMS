<?php

namespace Modules\Quanlychung\Entities;


use Illuminate\Database\Eloquent\Model;

class Chucdanh extends Model
{
    

    protected $table = 'chucdanh';
    
    protected $fillable = [
        'machucdanh',
        'tenchucdanh',
    ];
}
