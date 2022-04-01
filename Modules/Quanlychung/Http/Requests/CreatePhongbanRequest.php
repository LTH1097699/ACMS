<?php

namespace Modules\Quanlychung\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreatePhongbanRequest extends BaseFormRequest
{
    public function rules()
    {
         return [
            'maphong' => 'required|unique:phongban,maphong',
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
