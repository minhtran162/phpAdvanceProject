<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:10|max:100',
            'email' => 'required|min:10|max:100|unique:posts',
            'birthday' => 'required',
            'adress' => 'required|min:20|max:150'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('customer.errors.name.required'),
            'name.min' => trans('customer.errors.name.min'),
            'name.max' => trans('customer.errors.email.max'),
            
            'email.required' => trans('customer.errors.email.required'),
            'email.min' => trans('customer.errors.email.min'),
            'email.max' => trans('customer.errors.email.max'),
            'email.unique' => trans('customer.errors.email.unique'),
            
            'birthday.required' => trans('customer.errors.birthday.required'),
            
            'address.required' => trans('customer.errors.address.required'),
            'address.min' => trans('customer.errors.address.min'),
            'address.max' => trans('customer.errors.address.max')
        ];
    }
}
