<?php

namespace Modules\ContentManagement\Http\Requests\AboutUs;

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
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'experience' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'experience.required' => 'Experience field is required.',
            'description.required' => 'Description field is required.',
        ];
    }
}