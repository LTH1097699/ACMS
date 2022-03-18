<?php

namespace Modules\Phatsinhtang\Entities;


use Illuminate\Database\Eloquent\Model;

class trangthai extends Model
{
   

    protected $table = 'trangthai';
   
    protected $fillable = [
        "name",
        "note",
    ];
}
