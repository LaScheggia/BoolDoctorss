<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => 'required|max:255|min:2',
            'surname' => 'required|max:100|min:2',
            'address' => 'nullable|max:100|min:3',
            'propic' => 'nullable|image|max:32000',
            'specializations' => 'nullable|exists:specializations,id' // validazione specializations
        ];
    }


    public function messages(){

        return [
            'name.required' => 'Per favore scrivi il tuo nome.',
            'name.min' => 'Il tuo nome deve essere lungo almeno 2 caratteri',
            'name.max' => 'Il tuo nome deve essere più corto di 255 caratteri',
            'surname.required' => 'Per favore scrivi il tuo cognome.',
            'surname.min' => 'Il tuo cognome deve essere lungo almeno 2 caratteri',
            'surname.max' => 'Il tuo cognome deve essere più corto di 255 caratteri',
            'unique:users,email,id' => 'Questa mail esiste già!',
            'email.max' => 'La tua mail deve essere più corta di 255 caratteri',
            'address.max' => 'Numero di caratteri massimo: 100',
            'address.min' => 'L\'indirizzo inserito non è valido',
            'propic.image' => 'Il file da te caricato non è valido',
            'propic.max' => 'La foto da te caricata è troppo pesante',
            'specializations.exists'=> 'Il valore inserito non è corretto'
        ];

    }
}
