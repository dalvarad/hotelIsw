<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class UserRequest extends Request
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
            'name' => 'min:4|max:120|alpha|required',
            'rut' => 'max:12|required|unique:users|cl_rut',
            'email' => 'min:5|max:120|required|unique:users',
            'password' => 'min:6|max:40|confirmed|required',
            'type' => 'required'
        ];
    }
}
