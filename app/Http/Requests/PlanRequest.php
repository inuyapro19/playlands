<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'nombre_plan'=>'required',
            'imagen'=>'required',
            'descripcion'=>'required',
            'precio_plan'=>'required|numeric',
            'cantidad_per'=>'required'
        ];
    }

    public function messages()
    {
        return [
        'precio_plan.numeric' => 'El precio no debe contener simbolos y/o puntuación.',
        ];
    }
}
