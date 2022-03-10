<?php

namespace Modules\HopDong\Entities;

use Illuminate\Database\Eloquent\Model;

class HopdongTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'hopdong__hopdong_translations';
}
