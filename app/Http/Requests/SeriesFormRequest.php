<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
        //regras de validação dos campos do formulário (ver documentação)
        return [
            
            'nome' => 'required'
        ];
    }
    //função para exibir mensagens traduzidas
    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }
        
        
    
}
