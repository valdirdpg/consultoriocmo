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
            'nm_medico'=>'string|required|min:10|max:60',
            'cpf_medico'=>'numeric|digits_between:11,11',//|unique:medicos,cpf_medico' ,
            'rg_medico'=>'numeric|digits_between:8,11',//|unique:medicos,rg_medico' ,
            'nm_usuario'=>'required|max:40',//|unique:medicos,nm_usuario',
            'nr_crm'=>'required|max:8',//|unique:medicos,nr_crm',
            'cd_especialidade'=>'required',
            ];
    }
    public function messages()
    {
        return [
            'nm_medico.required'=>'Este campo é de preenchimento obrigatório!',
            'nm_medico.string'=>'O campo Nome só deve conter letras e sem acentos!',
            'cpf_medico.digits_between'=>'O campo CPF dever ser preenchido com 11 caracteres!' ,
            'rg_medico.digits_between'=>'Campo RG preenchido incorretamente. O mesmo deve conter entre 8 e 11 caracters numéricos!' ,
            'nm_usuario.unique'=>'O email informado já existe',
            'cpf_medico.unique'=>'O CPF informado já existe!',
            'rg_medico.unique'=>'O RG informado já existe!',
            'nr_crm.unique'=>'O CRM informado já existe!',
            'nr_crm.required'=>  'Este campo é de preenchimento obrigatório!',
            'cd_especialidade.required'=>'Este campo é de preenchimento obrigatório!',
        ];
    }
}
