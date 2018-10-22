<?php

namespace App\Http\Requests\Site\Request;

use Illuminate\Foundation\Http\FormRequest;

class ConvenioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
               'nm_convenio'=>'required|min:3|max:50',
               'ds_regioes'=>'required|min:5|max:50',
        ];
    }

    public function messages() {
        return [
            'nm_convenio.required' => 'O campo nome eh de preenchimento obrigatorio!',
            'ds_regioes.required' => 'O campo regiões eh de preenchimento obrigatorio!',

        ];
    }
}
