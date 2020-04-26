<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'alun_nome' => 'required|min:10',
            'alun_cpf' => 'required|min:5',
            'alun_rg' => 'required|min:5'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'alun_nome.required' => 'Necessário preencher o nome',
            'alun_cpf.required' => 'Necessário preencher o CPF',
        ];
    }
}
