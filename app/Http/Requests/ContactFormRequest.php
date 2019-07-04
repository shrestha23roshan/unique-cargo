<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required|regex:/(98)[0-9]{8}/|size:10'
        ];
    }
    
    public function messages()
    {
        return [
            'full_name.required' => 'Full Name field is required.',
            'email.required' => 'Email field is required.',
            'subject.required' => 'Subject field is required.',
            'message.required' => 'Message field is required.',
            'phone.required' => 'Phone Number field is required.' 
        ];
    }
}
