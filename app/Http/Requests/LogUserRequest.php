<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogUserRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {

        return [
            'family_name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|max:255',
            'password' => 'required|string',
        ];
    }
}
