<?php

namespace Modules\HopDong\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Hopdong extends Model
{
    use Translatable;

    protected $table = 'hopdong__hopdongs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
