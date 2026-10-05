<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'             => ['required', 'string', 'max:120'],
            'email'            => ['required', 'email', 'max:150'],
            'phone'            => ['required', 'string', 'max:30'],
            'company'          => ['nullable', 'string', 'max:150'],
            'project_type'     => ['required', 'in:pre_construction,on_site_oversight,trade_consulting,dispute_resolution,not_sure'],
            'project_location' => ['required', 'string', 'max:150'],
            'budget_range'     => ['required', 'in:under_100k,100k_500k,500k_2m,2m_10m,over_10m'],
            'timeline'         => ['required', 'in:immediately,1_3_months,3_6_months,planning_stage'],
            'message'          => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'project_type.required' => 'Please tell us which service you need.',
            'budget_range.required' => 'An estimated budget range helps us scope the right team.',
        ];
    }
}
