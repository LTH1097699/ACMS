<?php

namespace Modules\Tinhluong\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateTinhluongRequest extends BaseFormRequest
{
    public function rules()
    {
        return [];
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
