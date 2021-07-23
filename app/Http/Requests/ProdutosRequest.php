<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'descricao' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório!',
            'nome.min' => 'Nome precisa ter 5 caracteres!',
            'valor.required' => 'Valor é obrigatório!',
            'valor.numeric' => 'Valor não é númerico!',
            'quantidade.required' => 'Quantidade é obrigatório!',
            'descricao.required' => 'Descrição é obrigatório!',
        ];
    }
}
