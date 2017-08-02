<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

class ReservaRequest extends Request
{

    public function authorize()
    {
        return true;
    }



    public function rules()
    {

        $date = Carbon::now()->subDay(2)->format('d-m-Y');        

        return [
            'id_ha'             => 'required',
            'id_cl'             => 'required',
            'checkin'  => "required|after:$date",
            'checkout'   => 'required|after:reserva_comienza'            
        ];
    }
}