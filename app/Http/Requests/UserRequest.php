<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|not_regex:([0-9]+)|unique:places,name',
            'about'=>'required',
            'type'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Не забывайте ввести название места!',
            'about.required' => 'Не забывайте ввести описание места!',
            'name.not_regex' => 'Имя места не должно содержать цифр!',
            'name.unique' => 'Такое место уже существует!',
        ];
    }
}
