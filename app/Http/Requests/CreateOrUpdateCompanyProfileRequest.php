<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCompanyProfileRequest extends FormRequest
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
            'name'          => 'required|string|max:511',
            'description'   => 'nullable',
            'phone_number'  => 'string|max:511',
            'url'           => 'required|string|max:511',
            'linkedin_url'  => 'required|string|max:511',
            'image'         => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
}
