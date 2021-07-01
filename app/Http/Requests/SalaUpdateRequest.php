<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaUpdateRequest extends FormRequest
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
            'numeroSala'=>'required|int|max:3',
            'capacidad'=>'required|int|max:50',
            'bloque'=>'required|string|max:1',
            'piso'=>'required|int|max:1',
        ];
    }

    public function messages()
    {
        return[
            'numeroSala.required'=>'Este campo es requerido',
            'numeroSala.int'=>'El valor no es correcto',
            'numeroSala.max'=>'Solo se permiten 3 caracteres',
            'capacidad.required'=>'Este campo es requerido',
            'capacidad.int'=>'El valor no es correcto',
            'capacidad.max'=>'Solo se permiten 50 caracteres',
            'bloque.required'=>'Este campo es requerido',
            'bloque.string'=>'El valor no es correcto',
            'bloque.max'=>'Solo se permiten 1 caracteres',
            'piso.required'=>'Este campo es requerido',
            'piso.int'=>'El valor no es correcto',
            'piso.max'=>'Solo se permiten 1 caracteres',
        ];
    }
}
