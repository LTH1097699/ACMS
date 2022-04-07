<?php

namespace Modules\Bangchamcong\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateBangchamcongRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'tonggiothucte'=>'required|int',
            'tonggiotheoca'=>'required|int',
             'thoigiantangca'=>'required|int'
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
        return [
          
        ];
    }
}
