<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|url|min:12',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'url.required' => 'Vous avez omis d\'entrer une url!',
            'url.url' => 'Entrez une url valide svp!',
            'url.min' => 'Vous devez entrer une url de :min minimum!',
        ];
    }
}
