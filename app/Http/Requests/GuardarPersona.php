<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPersona extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'nombre' => 'required|max:6',
            'edad' => 'required|integer|min:18'
        ];
    }

    public function attributes()
    {
        return [
            //'nombre' => 'nombre de la persona'
        ];
    }


    public function messages()
    {
        return [
    
            'edad.min' => 'La persona es menor de edad'
        ];
    }
}
