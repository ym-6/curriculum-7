<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMuseum extends FormRequest
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
            'name' => 'required|string|max:255', 
            'prefecture_id' => 'required|integer|exists:prefectures,id',
            'postalcode' => 'required|string|max:9',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:13',            
        ];
    }
}
