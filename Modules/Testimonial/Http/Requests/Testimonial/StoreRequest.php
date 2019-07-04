<?php

namespace Modules\Testimonial\Http\Requests\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'attachment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required.',
            'location.required' => 'Location field is required.',
            'description.required' => 'Description field is required.',
            'attachment.required' => 'Attachment field is required.'
        ];
    }
}