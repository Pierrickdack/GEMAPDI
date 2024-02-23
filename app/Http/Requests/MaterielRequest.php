<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterielRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code_mat' => 'required|string',
            'nom_mat' => 'required|string',
            'description' => 'required|string',
            'date_acq' => 'required|date',
            'quantite' => 'required|integer',
        ];
    }
}
