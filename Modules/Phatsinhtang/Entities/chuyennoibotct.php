<?php

namespace Modules\Phatsinhtang\Entities;


use Illuminate\Database\Eloquent\Model;

class chuyennoibotct extends Model
{
    
    protected $table = 'chuyennoibotct';
   
    protected $fillable = [
        'madonvi',
        'tendonvi',
    ];
}
