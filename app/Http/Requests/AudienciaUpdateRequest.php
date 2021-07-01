<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudienciaUpdateRequest extends FormRequest
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
            'tiempo'=>'required|time|max:5',
            'observaciones'=>'required|string|max:1500',
        ];
    }

    public function messages()
    {
        return[
            'tiempo.required'=>'Este campo es requerido.',
            'tiempo.time'=>'El valor no es correcto.',
            'tiempo.max'=>'Solo se permiten 5 caracteres.',
            'observaciones.required'=>'Este campo es requerido.',
            'observaciones.string'=>'El valor no es correcto.',
            'observaciones.max'=>'Solo se permiten 1.500 caracteres.',
        ];
    }
}
