<?php

namespace Modules\Hopdong\Entities;

use Illuminate\Database\Eloquent\Model;

class Hopdong extends Model
{
    protected $table = 'hopdong';
    protected $fillable = [
        'mahopdong',
        'thoihan',
    ];
}
