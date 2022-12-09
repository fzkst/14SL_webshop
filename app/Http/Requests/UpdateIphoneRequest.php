<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIphoneRequest extends FormRequest
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
            'modell' => 'required | string | max:50',
            'szin' => 'required | string | max:30',
            'tarhely' => 'required | integer',
            'ar' => 'required | integer',
            'keszlet' => 'required | integer',
            'kepfajl' => 'required | string | max:100'
        ];
    }
}
