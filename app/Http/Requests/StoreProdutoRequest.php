<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
                'name'  => ['required', new FullName()],
                'valor' => 'required',
                'descricao' => 'required',
                'email' => 'required|email',
                'data_fabricao' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Este campo é obrigatório',
            'valor.required'  => 'Este campo é obrigatório',
            'descricao.required'  => 'Este campo é obrigatório',
            'email.required'  => 'Este campo é obrigatório',
            'email.email'  => 'Endereço de email inválido',
            'data_fabricao.required'  => 'Este campo é obrigatório',

        ];
    }
}
