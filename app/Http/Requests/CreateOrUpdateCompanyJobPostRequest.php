<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCompanyJobPostRequest extends FormRequest
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
            'title'                 => 'required|string|max:511',
            'category'              => 'required|string',
            'description'           => 'required',
            'apply_link'            => 'string',
            'job_expiration_date'   => 'required|date',
            'is_available'          => 'boolean',
            'location'              => 'required|string|max:255',
            'salary_range'          => 'required|string',
            'featured_image'        => 'file'
        ];
    }
}
