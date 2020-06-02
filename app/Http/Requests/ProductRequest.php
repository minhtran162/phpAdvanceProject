<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required|numeric',
            'desc' => 'required',
            'image' => 'required|url',
            'brand_id' => 'required',
            'type_id' => 'required',
            'nation_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('product.errors.name.required'),
            'name.min' => trans('product.errors.name.min'),
            'name.max' => trans('product.errors.name.max'),
            
            'desc.required' => trans('product.desc_error_required'),

            'image.required' => trans('product.img_error_required'),
            'image.url' => trans('product.img_error_url'),

            'price.required' => trans('product.price_error_required'),
            'price.numeric' => trans('product.price_error_numeric'),

            'brand_id.required' => trans('product.brand_error_required'),
            'type_id.required' => trans('product.type_error_required'),
            'nation_id.required' => trans('product.nation_error_required'),

        ];
    }
}
