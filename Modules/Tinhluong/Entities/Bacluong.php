<?php

namespace Modules\Tinhluong\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Bacluong extends Model
{
    use Translatable;

    protected $table = 'tinhluong__bacluongs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
