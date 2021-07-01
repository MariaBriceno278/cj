<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasoUpdateRequest extends FormRequest
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
            'nReferenciaCaso'=>'required|string|max:10',
            'fechaRegistro'=>'required|date|max:8',
            'estado'=>'required|boolean|max:2',
        ];
    }

    public function messages()
    {
        return[
            'nReferenciaCaso.required'=>'Este campo es requerido.',
            'nReferenciaCaso.string'=>'El valor no es correcto.',
            'nReferenciaCaso.max'=>'Solo se permiten 10 caracteres.',
            'fechaRegistro.required'=>'Este campo es requerido.',
            'fechaRegistro.date'=>'El valor no es correcto.',
            'fechaRegistro.max'=>'Solo se permiten 8 caracteres.',
            'estado.required'=>'Este campo es requerido.',
            'estado.boolean'=>'El valor no es correcto.',
            'estado.max'=>'Solo se permiten 2 caracteres.',
        ];
    }
}
