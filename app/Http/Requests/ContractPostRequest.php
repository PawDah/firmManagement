<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractPostRequest extends FormRequest
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
            'contract_details' => 'required|max:500',
            'payment_amount' => 'required|numeric|between:0,99999.99',
            'start_date' => 'required|date',
            'end_date' => 'date',
            'employee_id' =>'integer|min:0',
            'contract_type_id' => 'integer|min:0'
        ];
    }
}
