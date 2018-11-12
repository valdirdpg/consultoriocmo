<?php

namespace App\Http\Requests\Site\Request;

use Illuminate\Foundation\Http\FormRequest;

class EspecialidadeFormRequest extends FormRequest
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
            'ds_especialidades'=>'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'ds_especialidades.required'=>'Este campo é de preenchimento obrigatório',
            'ds_especialidades.min'=> 'Este campo deve ser preenchido por no mínimo 5 caracteres!',
            'ds_especialidades.max'=> 'Limite de caracteres excedido para este campo!'
        ];
    }
}
