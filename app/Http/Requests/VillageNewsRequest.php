<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VillageNewsRequest extends FormRequest
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
            'title'=>'required|max:200',
            'news_content'=>'required',
            'date'=>'required|date',
            'photo'=>'nullable|image|max:2048',
        ];
    }
}
