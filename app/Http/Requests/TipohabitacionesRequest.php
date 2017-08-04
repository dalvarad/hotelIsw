<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class TipohabitacionesRequest extends Request
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
            'valor' => 'max:900|required|numeric',
            'caracteristicas' => 'min:10|max:500|required|',
            'descripcion' => 'min:6|max:500|required',
            'type' => 'alpha|unique:tipohabitaciones|required'
        ];
    }
}