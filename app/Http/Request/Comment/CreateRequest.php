<?php

namespace App\Http\Request\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'subject' =>    'required|min:6',
            'body' =>       'required|min:10',
            'article_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'subject.required' =>   'Цe поле обов\'язкове до заповнення',
            'subject.min'      =>   'Мінімум 6 символів',
            'body.required'    =>   'Цe поле обов\'язкове до заповнення',
            'body.min'         =>   'Мінімум 10 символів',

        ];
    }
}
