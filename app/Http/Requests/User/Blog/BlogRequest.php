<?php

namespace App\Http\Requests\User\Blog;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'place_id' => 'required|integer',
            'title'    => 'required|max:255',
            'content' => 'required',
            'season'    => 'required|integer',
            'price' => 'required|integer',
            'file_path' => '',
        ];
    }

    public function messages()
    {
        return [
            'title.required'    => 'Title is required!',
            'title.max'         => 'Title max 255 characters',
            'content.required' => 'Content is required!',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return redirect()->route('user.home')->with('error', ' Create blog failed!');
    }
}
