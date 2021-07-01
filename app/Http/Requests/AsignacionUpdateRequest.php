<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignacionUpdateRequest extends FormRequest
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
            'fechaHoraInicio '=>'required|datetime|max:10',
            'fechaHoraFin'=>'required|datetime|max:10',
            'notificacionEnviada'=>'required|boolean|max:2',
        ];
    }

    public function messages()
    {
        return[
            'fechaHoraInicio.required'=>'Este campo es requerido.',
            'fechaHoraInicio.datetime'=>'El valor no es correcto.',
            'fechaHoraInicio.max'=>'Solo se permiten 10 caracteres.',
            'fechaHoraFin.required'=>'Este campo es requerido.',
            'fechaHoraFin.datetime'=>'El valor no es correcto.',
            'fechaHoraFin.max'=>'Solo se permiten 10 caracteres.',
            'notificacionEnviada.required'=>'Este campo es requerido.',
            'notificacionEnviada.boolean'=>'El valor no es correcto.',
            'notificacionEnviada.max'=>'Solo se permiten 2 caracteres.',
        ];
    }
}
