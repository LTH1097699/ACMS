<?php

namespace Modules\Quanlychung\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdatenoibodonviRequest extends BaseFormRequest
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
