<?php

namespace Modules\Tinhluong\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Soluong extends Model
{
    use Translatable;

    protected $table = 'tinhluong__soluongs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
