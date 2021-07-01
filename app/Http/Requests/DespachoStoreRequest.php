<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DespachoStoreRequest extends FormRequest
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
            'numeroDespacho'=>'required|int|max:3',
            'nombreDespacho'=>'required|string|max:50',
            'telefonoDespacho'=>'required|int|max:7',
        ];
    }

    public function messages()
    {
        return[
            'numeroDespacho.required'=>'Este campo es requerido',
            'numeroDespacho.int'=>'El valor no es correcto',
            'numeroDespacho.max'=>'Solo se permiten 3 caracteres',
            'nombreDespacho.required'=>'Este campo es requerido',
            'nombreDespacho.string'=>'El valor no es correcto',
            'nombreDespacho.max'=>'Solo se permiten 50 caracteres',
            'telefonoDespacho.required'=>'Este campo es requerido',
            'telefonoDespacho.int'=>'El valor no es correcto',
            'telefonoDespacho.max'=>'Solo se permiten 7 caracteres',
        ];
    }
}
