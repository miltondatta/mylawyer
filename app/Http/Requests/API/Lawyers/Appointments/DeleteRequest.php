<?php

namespace App\Http\Requests\API\Lawyers\Appointments;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
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
            'appointment_type_id' => 'required|exists:appointment_types,id',
            'day' => 'required|string',
        ];
    }
}
