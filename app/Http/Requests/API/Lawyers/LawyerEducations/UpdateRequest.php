<?php

namespace App\Http\Requests\API\Lawyers\LawyerEducations;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'institute' => 'required|string',
            'degree' => 'required|string',
            'subject' => 'required|string',
            'from' => 'required',
            'to' => 'required',
        ];
    }
}
