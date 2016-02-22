<?php

namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'nome' => 'required|min:5',
                    'descricao' => 'required|max:255',
                    'valor' => 'required|numeric',
                    'quantidade' => 'required|numeric' 
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute é um campo obrigatório',
            'min' => ':attribute deve conter no mínimo :min caracteres',
            'numeric' => ':attribute deve ser númerico'
        ]; 
    }
}
