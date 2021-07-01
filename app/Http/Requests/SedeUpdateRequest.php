<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SedeUpdateRequest extends FormRequest
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
            'direccionSede'=>'required|string|max:60',
            'nombreSede'=>'required|string|max:50',
        ];
    }

    public function messages()
    {
        return[
            'direccionSede.required'=>'Este campo es requerido.',
            'direccionSede.string'=>'El valor no es correcto.',
            'direccionSede.max'=>'Solo se permiten 60 caracteres.',
            'nombreSede.required'=>'Este campo es requerido.',
            'nombreSede.string'=>'El valor no es correcto.',
            'nombreSede.max'=>'Solo se permiten 50 caracteres.',
        ];
    }
}
