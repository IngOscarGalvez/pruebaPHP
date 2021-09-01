<?php

namespace App\Http\Requests\Api\V1\User;

use Anik\Form\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => [
                'required',
                'email:rfc,dns',
                'unique:users,email'
            ],
            'role' => [
                'required',
                'exists:roles,name'
            ],
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/'  // must contain at least one caracter Especial
            ],

        ];
    }
}
