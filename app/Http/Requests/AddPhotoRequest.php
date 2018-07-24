<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addPhotoRequest extends FormRequest
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
            'id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'id.required'=> 'Список мест пуст, добавьте место, затем к нему фотографии',
        ];
    }
}
