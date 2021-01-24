<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'todo')
        {
            return 'ture';
        } else {
            return 'false';
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:250'
        ];
    }

    public function message()
    {
        return [
            'title.required' => '必ず入力してください',
            'title.max' => '250字以下で入力してください',
        ];
    }
}
