<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $redirectRoute = 'documentos.create';

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
            'nombre_documento' => 'required',
            'archivo' => 'required'
        ];
    }


    public function messages()
    {
        return [
        'nombre_documento.required' => 'El campo nombre es obligatorio.',
        'archivo.required' => 'Se debe seleccionar un archivo en formato pdf.',
    ];
    }
}
