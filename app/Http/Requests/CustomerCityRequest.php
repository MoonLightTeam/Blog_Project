<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCityRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return $messages =
            ['name.required' => 'may not be blank',
                'name.min:3' => 'more than 3 characters',
                'name.max:30' => 'less than 30 characters',
                'dob.required' => 'may not be blank',
                'phone.required' => 'may not be blank',
                'email.required' => 'may not be blank'
            ];
    }

}
