<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvolucradoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|string|max:50',
            'correo'=>'required|string|max:60',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permiten 50 caracteres',
            'correo.required'=>'Este campo es requerido',
            'correo.string'=>'El valor no es correcto',
            'correo.max'=>'Solo se permiten 60 caracteres',
        ];
    }
}
