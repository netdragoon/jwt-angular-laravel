<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFuncaoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'empresa_id' => 'required|uniquekeyduple:funcao_id',
            'nome.*' => 'required_if:liberar.*,true'
        ];
    }

    public function messages()
    {
        return [
            'empresa_id.uniquekeyduple' => 'Função existente!',
            'nome.required_if' => 'nome é para ser digitado'
        ];
    }
}
