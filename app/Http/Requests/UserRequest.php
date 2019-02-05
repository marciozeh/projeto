<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'foto' => '',
            'graduacao' => 'required',
            'nomeGuerra' => 'required',
            'secao' => 'required',
            'idtMil' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'dataNasc' => 'required',
            'dataPraca' => 'required',
            'escolaridade' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Campo nome é obrigatório!',
            'graduacao.required' => 'Campo gradução é obrigatório!',
            'nomeGuerra.required' => 'Campo Nome de Guerra é obrigatório!',
            'secao.required' => 'Campo Seção é obrigatório!',
            'idtMil.required' => 'Campo Identidade Militar é obrigatório!',
            'cpf.required' => 'Campo CPF é obrigatório!',
            'rg.required' => 'Campo RG é obrigatório!',
            'dataNasc.required' => 'Campo Data de Nascimento é obrigatório!',
            'dataPraca.required' => 'Campo Data de Praça é obrigatório!',
            'escolaridade.required' => 'Campo Escolaridade é obrigatório!',
            'telefone.required' => 'Campo Telefone é obrigatório!',
            'endereco.required' => 'Campo Endereço é obrigatório!',
            'email.required' => 'Campo Email é obrigatório!',
            'password.required' => 'Campo Senha é obrigatório!'

        ];

    }
}
