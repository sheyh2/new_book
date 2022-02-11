<?php

namespace App\Http\Requests\Category;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /** @var Validator $validator */
    public $validator = null;

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
            'title'  => 'required',
            'locale' => 'required'
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'title.required' => 'Поля название обязательный',
            'locale.required' => 'Язык не выбрано'
        ];
    }
}
