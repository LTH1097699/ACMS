<?php

namespace Modules\Tinhluong\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Ngachluong extends Model
{
    use Translatable;

    protected $table = 'tinhluong__ngachluongs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
