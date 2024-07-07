<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'owner' => ['nullable', 'max:100'],
            'make' => ['required', 'max:100'],
            'model'=> ['required', 'max:100'],
            'year_born'=> ['nullable', 'max:100'],
            'mileage'=> ['nullable', 'max:100'],
            'colour'=> ['nullable', 'max:100'],
        ];
    }
}
