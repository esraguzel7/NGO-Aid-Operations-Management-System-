<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateNowRequest extends FormRequest
{
    protected $errorBag = 'donate_error';
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
            'donate_amount' => 'required|numeric|min:1',
            'transportation' => 'boolean',
        ];
    }
}
