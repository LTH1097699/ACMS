<?php

namespace Modules\Quanlychung\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreatenoibotctRequest extends BaseFormRequest
{
    public function rules()
    {  
        // $rules = [
        //     'Category' => ' required|unique:categories,Category',
        // ];
        // if ($this->method() == 'PUT') {
        //     $rules['Category'] = 'required|unique:categories,Category,' . $this->category;
        // }
        // return $rules;
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
        return [
            'noibotct' => 'errrr',
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
