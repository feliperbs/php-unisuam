<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecommendationPostRequest extends FormRequest
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
            'cpf' => 'required|cpf|unique:recommendations',
            'email' => 'required|email|unique:recommendations',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Digite o nome da pessoa.',
            'cpf.required' => 'Digite o cpf da pessoa.',
            'cpf.cpf' => 'CPF Inválido.',
            'cpf.unique' => 'CPF já cadastrado.',
            'email.required' => 'Digite o email da pessoa.',
            'email.email' => 'Email Inválido.',
            'email.unique' => 'E-mail já cadastrado.',
        ];
    }
}
