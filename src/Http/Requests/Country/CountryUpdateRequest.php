<?php

namespace TomatoPHP\TomatoLocations\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class CountryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|max:255|string',
            'code' => 'sometimes|max:255|string',
            'phone' => 'sometimes|max:255',
            'lat' => 'nullable|max:255|string',
            'lang' => 'nullable|max:255|string'
        ];
    }
}
