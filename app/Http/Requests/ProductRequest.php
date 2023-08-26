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
            'product_name' => 'required|min:3',
            'stock' => 'required|integer',
            'view' => 'required|integer',
            'priceEach' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => '* Product name is required',
            'product_name.min' => '* At least 3 words',
            'stock.required' => '* Stock is required',
            'stock.integer' => '* Stock is number',
            'view.required' => '* View is required',
            'view.integer' => '* View is number',
            'priceEach.required' => '* Price is required',
            'priceEach.integer' => '* View is number',
        ];
    }
}
