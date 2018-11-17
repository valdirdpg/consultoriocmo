<?php

namespace App\Http\Requests\Site\Request;

use Illuminate\Foundation\Http\FormRequest;

class FormMedicosRequest extends FormRequest
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
            'nm_medico'=>'alpha|required|min:10|max:60',
            'cpf_medico'=>'alpha_num|min:11|max:11' ,
            'rg_medico'=>'min:8|max:11' ,
            'nm_usuario'=>'unique:connection.users,email_address',
            'nr_crm'=>'required',
            'cd_especialidade'=>'required',

        ];
    }
    public function messages()
    {
       return [ 'nm_medico.required'=>'Este campo é de preenchimento obrigatório!',
                'nm_medico.alpha'=>'Este campo só deve conter letras!',
                'cpf_medico.alpha_num'=>'Preencha com caracteres válidos!' ,
                'cpf_medico'=>'Este campo requer 11 caracteres válidos!' ,
                'rg_medico'=>'Campo preenchido incorretamente, favor verificar!' ,
                'nr_crm'=>  'Este campo é de preenchimento !obrigatório!',
                'cd_especialidade'=>'Este campo é de preenchimento obrigatório!',
       ];
    }
}
