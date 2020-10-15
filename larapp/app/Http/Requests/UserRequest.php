<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|numeric',
            'birthdate' => 'required|date',
            'gender'    => 'required',
            'address'   => 'required',
            'photo'     => 'required',
            'password'  => 'required|min:6|confirmed',
        ];
    }

    public function messages() {
        return [
            'fullname.required'  => 'El campo "Nombre Completo" es Obligatorio.',
            'email.required'     => 'El campo "Correo Electrónico" es Obligatorio.',
            'phone.required'     => 'El campo "Número Telefónico" es Obligatorio.',
            'birthdate.required' => 'El campo "Fecha de Nacimiento" es Obligatorio.',
            'gender.required'    => 'El campo "Genero" es Obligatorio.',
            'address.required'   => 'El campo "Dierección" es Obligatorio.',
            'photo.required'     => 'El campo "Foto" es Obligatorio.',
            'password.required'  => 'El campo "Contraseña" es Obligatorio.',
        ];
    }
}
