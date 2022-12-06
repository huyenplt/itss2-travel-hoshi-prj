<?php

namespace App\Http\Requests\User\Auth;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Redirect;

class SignUpRequest extends FormRequest
{
    private $signUp = 'signup';
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
            'name'     => 'required',
            'email'    => 'required|max:255|unique:users,email',
            'password' => 'required|min:6|max:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Name is required!',
            'email.required'    => 'Email is required!',
            'email.max'         => 'Email max 255 characters',
            'password.required' => 'Password is required!',
            'password.min'      => 'Password from 6 to 8 characters',
            'password.max'      => 'Password from 6 to 8 characters',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return Redirect::back()->with(['type' => $this->signUp]);
    }
}
