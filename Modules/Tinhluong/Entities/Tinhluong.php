<?php

namespace Modules\Tinhluong\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tinhluong extends Model
{
    use Translatable;

    protected $table = 'tinhluong__tinhluongs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
