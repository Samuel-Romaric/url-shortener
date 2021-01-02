<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email|min:10',
            'subject' => 'required|min:5',
            'msg' => 'required|min:8',
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
            'name.required' => 'Ce champ doit être renseigné',
            'name.min' => 'Ce doit contenir :min caractères minimum',
            'email.required' => 'Vous devez completer ce champ.',
            'email.email' => 'veuillez entrer un mail valide !',
            'email.min' => 'Ce doit contenir :min caractères minimum',
            'subject.required' => 'Ce champ est obligeatoir',
            'subject.min' => 'Ce doit contenir :min caractères minimum',
            'msg.required' => 'Désolé ce champ est obligeatoir',
            'msg.min' => 'Ce doit contenir :min caractères minimum',
        ];
    }
}
