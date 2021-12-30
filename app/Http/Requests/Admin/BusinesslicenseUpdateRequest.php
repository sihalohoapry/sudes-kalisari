<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BusinesslicenseUpdateRequest extends FormRequest
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
            'name'=>'nullable|max:50',
            'religion'=>'nullable|max:50',
            'address'=>'nullable|max:50',
            'business_name'=>'nullable|max:50',
            'business_type'=>'nullable|max:50',
            'business_address'=>'nullable|max:50',
            'business_activity'=>'nullable|max:255',
            'photo_kk'=>'nullable|image',
            'stauts'=> 'nullable|max:255',

        ];
    }
}
