<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerUpdateProfileRequest extends FormRequest
{
    protected $errorBag = 'update_error';
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
            'annual_income' => 'required|numeric|min:100000',
            'transportation' => 'boolean',
            'available_times.*.*' => 'required|integer',
            'region_tb_support' => 'required',
        ];
    }
}
