<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:50',
            'content' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'Unos naslova je obavezan',
            'title.max' => 'Prevelik broj znakova u naslovu',
            'content.required' => 'Unos sadržaja je obavezan'
        ];
    }
}
