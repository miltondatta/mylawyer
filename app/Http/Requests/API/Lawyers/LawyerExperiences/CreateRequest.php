<?php

namespace App\Http\Requests\API\Lawyers\LawyerExperiences;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'company' => 'required|string',
            'from' => 'required',
            'to' => 'required',
            'description' => 'nullable',
            'file' => 'required|mimes:doc,docx,pdf,xls,png,jpeg|max:204800',
            'is_active' => 'required|in:0,1'
        ];
    }
}
