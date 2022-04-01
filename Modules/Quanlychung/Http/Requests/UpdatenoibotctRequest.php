<?php

namespace Modules\Quanlychung\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdatenoibotctRequest extends BaseFormRequest
{
    public function rules()
    {
         return [
            'madonvi' => 'required|unique:noibotct,madonvi',
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
