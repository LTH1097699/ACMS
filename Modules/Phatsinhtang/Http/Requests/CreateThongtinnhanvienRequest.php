<?php

namespace Modules\Phatsinhtang\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateThongtinnhanvienRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
           'hinhanh' => 'required|image|mimes:jpg,jpeg,png,gif',
           'hovaten' => 'required',
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
    return [];
}

public function translationMessages()
{
    return [];
}
}
