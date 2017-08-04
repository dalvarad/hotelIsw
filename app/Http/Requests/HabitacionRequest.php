<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HabitacionRequest extends Request
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
            'id_tipo' => 'required',
            'id_estado' => 'required',
            'numero' => 'numeric|max:1000'
        ];
    }
}
