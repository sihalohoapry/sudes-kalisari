<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirthCertificateUpdateRequest extends FormRequest
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
            'day_of_born'=>'nullable|max:20',
            'place_of_born'=>'nullable|max:50',
            'born'=>'nullable|date',
            'time_of_born'=>'nullable|',
            'name_father'=>'nullable|max:50',
            'name_mother'=>'nullable|max:50',
            'son_of'=>'nullable|max:20',
            'name_son'=>'nullable|max:50',
            'status'=>'nullable|max:20',
            'letter_interests'=>'nullable|max:255',
            'photo_kk'=>'nullable|image|max:2048'
        ];
    }
}
