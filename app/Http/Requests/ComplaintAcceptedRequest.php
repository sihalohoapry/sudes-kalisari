<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplaintAcceptedRequest extends FormRequest
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
            'title'=> 'nullable|max:255',
            'content'=> 'nullable|',
            'date'=> 'nullable|date',
            'photo'=> 'nullable|image|max:2048',
            'stauts'=> 'nullable|max:255',
        ];
    }
}
