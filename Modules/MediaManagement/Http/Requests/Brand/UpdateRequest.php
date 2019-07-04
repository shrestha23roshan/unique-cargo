<?php

namespace Modules\MediaManagement\Http\Requests\Brand;

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
            // 'attachment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'attachment.required' => 'attachment field is required.',
        ];
    }
}