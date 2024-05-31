<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class RegisterVolunteerRequest extends FormRequest
{
    protected $errorBag = 'register_error';

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
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'annual_income' => 'required',
            'transportation' => 'boolean',
            'available_times.*.*' => 'required|integer',
            'region_tb_support' => 'required',
        ];
    }

}
