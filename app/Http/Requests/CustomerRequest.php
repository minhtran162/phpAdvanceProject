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
            'name.max' => 'Tên không quá 100 kí tự',
            
            'email.required' => trans('customer.errors.email.required'),
            'email.min' => trans('customer.errors.email.min'),
            'email.max' => 'Email không quá 100 kí tự',
            'email.unique' => 'Email đã tồn tại',
            
            'birthday.required' => trans('customer.errors.birthday.required'),
            
            'address.required' => trans('customer.errors.address.required'),
            'address.min' => trans('customer.errors.address.min'),
            'address.max' => 'Địa chỉ không quá 150 kí tự'
        ];
    }
}
