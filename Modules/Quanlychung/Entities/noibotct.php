<?php

namespace Modules\Quanlychung\Entities;


use Illuminate\Database\Eloquent\Model;

class noibotct extends Model
{
    

    protected $table = 'noibotct';
    
    protected $fillable = [
        'madonvi',
        'tendonvi',
    ];
}
