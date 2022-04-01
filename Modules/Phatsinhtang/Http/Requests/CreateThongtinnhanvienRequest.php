<?php

namespace Modules\Phatsinhtang\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateThongtinnhanvienRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
         'hinhanh' => 'image|mimes:jpg,jpeg,png,gif',
         'hovaten' => 'required',
         'ma_nhanvien' => 'required',
         'ma_nhanvien' => 'required|unique:thongtinnhanvien,ma_nhanvien',
     ];
 }

 public function translationRules()
 {
    return [];
}

public function authorize()
{
    return true;
}

public function messages()
{
    return [   
    ];
}

public function translationMessages()
{
    return [];
}
}
