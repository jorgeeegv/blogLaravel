<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50'

        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => 'El titulo es requerido',
            'contenido.required' => 'El contenido es requerido',
            'titulo.min' => 'El titulo es no tiene el minimo requerido',
            'contenido.min' => 'El contenido no tiene el minimo requerido'
        ];
    }
}
