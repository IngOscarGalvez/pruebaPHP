<?php

namespace App\Http\Requests\Api\V1\User;

use Anik\Form\FormRequest;

class UserDeleteRequest extends FormRequest
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
            'user_id' => [
                'required',
                'exists:users,id'
            ],
        ];
    }
}
