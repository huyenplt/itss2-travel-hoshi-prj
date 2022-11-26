<?php

namespace App\Http\Requests\Admin\Place;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'    => 'required|max:255',
            'address' => 'required|max:255',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Name is required!',
            'name.max'         => 'Name max 255 characters',
            'address.required' => 'Address is required!',
            'address.max'      => 'Address max 255 characters',
            'content.required' => 'Content is required!',
        ];
    }
}
