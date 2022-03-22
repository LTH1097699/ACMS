<?php

namespace Modules\Phatsinhtang\Entities;


use Illuminate\Database\Eloquent\Model;

class Thongtinnhanvien extends Model
{
    

    protected $table = 'thongtinnhanvien';
    
    protected $fillable = [
        'ma_nhanvien',
        'hovaten', 
        'gioitinh',    
        'ngaysinh',    
        'cmnd',    
        'ngaycap', 
        'noicap',  
        'tongiao', 
        'dantocthieuso',   
        'diachi',  
        'chuyenmon',   
        'trinhdo', 
        'vanban_chungchi', 
        'macongviec',  
        'maphong', 
        'sohopdong',   
        'mangach', 
        'mucluonghientai',
        'ma_donvi',
        'ma_chucdanh',
        'idtrangthai',

    ];

    // public function menuTct()
    // {
    //     return $this->hasMany('Modules\Phatsinhtang\Entities\chuyennoibotct')->orderBy('position', 'asc');
    // }
}
