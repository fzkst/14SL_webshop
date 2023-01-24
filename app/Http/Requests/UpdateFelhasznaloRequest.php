<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFelhasznaloRequest extends FormRequest
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
            'user_id'=> 'required | string | max:255',
            //'maganszemely' => '',
            'cegnev' => 'required_if:vezetknev,null',
            'vezeteknev' => 'required_if:cegnev,null',
            'keresztnev' => 'required_with:vezeteknev',
            'iranyitoszam' => 'required | integer | min:1000 | max:2299',
            'varos' => 'required | string | max:255',
            'cim' => 'required | string | max:255',
            'telefon' => 'required | string | max:255',
            'adoszam' => 'required_with:cegnev'
        ];
    }
}
