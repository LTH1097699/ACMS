<?php

namespace Modules\Bangchamcong\Entities;


use Illuminate\Database\Eloquent\Model;

class Bangchamcong extends Model
{
   

    protected $table = 'bangchamcong';
   
    protected $fillable = [
        'tonggiothucte',
        'tonggiotheoca',
        'thoigiantangca',

    ];
}
