<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'total' => 'required',
            'customer_id' =>'required',
            'order_id' =>'required',
            'product_id' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('customer.errors.name.required'),
            'price.required' => trans('customer.errors.price.required'),
            'quantity.required' => trans('customer.errors.quantity.required'),
            'total.required' => trans('customer.errors.total.required'),
            'customer_id.required' => trans('customer.errors.customer_id.required'),
            'order_id.required' => trans('customer.errors.order_id.required'),
            'product_id.required' => trans('customer.errors.product_id.required'),
        ];
    }
}
