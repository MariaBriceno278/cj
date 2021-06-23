<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolStoreRequest extends FormRequest
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
            'nombreRol'=>'required|string|max:50',
            'estadoRol'=>'required|string|max:10',
        ];
    }

    public function messages()
    {
        return[
            'nombreRol.required'=>'Este campo es requerido',
            'nombreRol.string'=>'El valor no es correcto',
            'nombreRol.max'=>'Solo se permiten 50 caracteres',
            'estadoRol.required'=>'Este campo es requerido',
            'estadoRol.string'=>'El valor no es correcto',
            'estadoRol.max'=>'Solo se permiten 10 caracteres',
        ];
    }
}
