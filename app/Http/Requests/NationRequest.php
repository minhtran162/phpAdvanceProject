<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NationRequest extends FormRequest
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
            'name' => 'required|min:3|max:100'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('nation.errors.name.required'),
            'name.min' => trans('nation.errors.name.min'),
            'name.max' => 'Tên nước không quá 50 kí tự'
        ];
    }
}
