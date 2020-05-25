<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:10|max:100|unique:posts',
            'email' => 'required|min:10|max:100|unique:posts',
            'password' => 'required|min:8|max:150'
        ];
    }
        public function messages()
        {
            return [
                'username.required' => trans('user.errors.name.required'),
                'name.min' => trans('user.errors.name.min'),
                'name.max' => 'Tên không quá 100 kí tự',
                'username.unique' => 'User đã tồn tại',
                
                'email.required' => trans('user.errors.name.required'),
                'email.min' => trans('user.errors.name.min'),
                'email.max' => 'Email không quá 100 kí tự',
                'email.unique' => 'Email đã tồn tại',
                
                'password.required' => trans('user.errors.name.required'),
                'password.min' => trans('user.errors.name.min'),
                'password.max' => 'Địa chỉ không quá 150 kí tự'
            ];
        }
}
