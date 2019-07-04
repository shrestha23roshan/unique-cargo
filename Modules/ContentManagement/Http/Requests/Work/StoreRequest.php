<?php

namespace Modules\ContentManagement\Http\Requests\Work;

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
            // 'title' => 'required',
            // 'category' => 'required',
            // 'description' => 'required',
            'attachment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title field is required.',
            'category.required' => 'Category field is required.',
            'description.required' => 'Description field is required.',
            'attachment.required' => 'Attachment field is required.'
        ];
    }
}