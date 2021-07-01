<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdateRequest extends FormRequest
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
            'nombreUsuario'=>'required|int|max:50',
            'apellidoUsuario'=>'required|int|max:50',
            'emailUsuario'=>'required|string|max:60',
            'documentoUsuario'=>'required|int|max:10',
            'telefono'=>'required|int|max:7',
        ];
    }

    public function messages()
    {
        return[
            'nombreUsuario.required'=>'Este campo es requerido',
            'nombreUsuario.string'=>'El valor no es correcto',
            'nombreUsuario.max'=>'Solo se permiten 50 caracteres',
            'apellidoUsuario.required'=>'Este campo es requerido',
            'apellidoUsuario.string'=>'El valor no es correcto',
            'apellidoUsuario.max'=>'Solo se permiten 50 caracteres',
            'emailUsuario.required'=>'Este campo es requerido',
            'emailUsuario.string'=>'El valor no es correcto',
            'emailUsuario.max'=>'Solo se permiten 60 caracteres',
            'documentoUsuario.required'=>'Este campo es requerido',
            'documentoUsuario.int'=>'El valor no es correcto',
            'documentoUsuario.max'=>'Solo se permiten 10 caracteres',
            'telefono.required'=>'Este campo es requerido',
            'telefono.int'=>'El valor no es correcto',
            'telefono.max'=>'Solo se permiten 7 caracteres',
        ];
    }
}
