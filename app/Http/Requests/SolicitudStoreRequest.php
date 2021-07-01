<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudStoreRequest extends FormRequest
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
            'fecha'=>'required|datetime|max:10',
            'capacidadRequerida'=>'required|int|max:3',
            'prioridadNormal'=>'required|boolean|max:2',
        ];
    }

    public function messages()
    {
        return[
            'fecha.required'=>'Este campo es requerido.',
            'fecha.datetime'=>'El valor no es correcto.',
            'fecha.max'=>'Solo se permiten 10 caracteres.',
            'capacidadRequerida.required'=>'Este campo es requerido.',
            'capacidadRequerida.int'=>'El valor no es correcto.',
            'capacidadRequerida.max'=>'Solo se permiten 3 caracteres.',
            'prioridadNormal.required'=>'Este campo es requerido.',
            'prioridadNormal.boolean'=>'El valor no es correcto.',
            'prioridadNormal.max'=>'Solo se permiten 2 caracteres.',
        ];
    }
}
