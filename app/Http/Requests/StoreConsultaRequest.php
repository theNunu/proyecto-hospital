<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'motivo' => 'required',
            'especialidad_id' => 'required|exists:especialidades,id',
            'horario_id' => 'required|exists:horarios,id',
            'medico_id' => 'required|exists:medicos,id',

        ];
    }
}
