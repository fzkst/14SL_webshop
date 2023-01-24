<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKategoriaRequest extends FormRequest
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
            'nev' => 'required | string | max:255',
            //'slug' => 'required | string | max:255',
            'leiras' => 'required | string',
            'kepfajl' => 'required | image',
            //'meta_cim' => 'required | string | max:255',
            //'meta_leiras' => 'required | string | max:255',
            //'meta_kulcsszo' => 'required | string | max:255'
        ];
    }
}
