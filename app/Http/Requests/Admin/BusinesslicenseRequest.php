<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BusinesslicenseRequest extends FormRequest
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
            'business_name'=>'required|max:50',
            'business_type'=>'required|max:50',
            'business_address'=>'required|max:50',
            'business_activity'=>'required|max:255',
            'photo_ktp'=>'required|image',
            'stauts'=> 'nullable|max:255',

        ];
    }
}
