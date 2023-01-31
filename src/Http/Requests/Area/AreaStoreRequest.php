<?php

namespace TomatoPHP\TomatoLocations\Http\Requests\Area;

use Illuminate\Foundation\Http\FormRequest;

class AreaStoreRequest extends FormRequest
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
                        'name' => 'required|max:255|string',
            'city_id' => 'required',
            'lat' => 'nullable|max:255|string',
            'lang' => 'nullable|max:255|string'
        ];
    }
}
