<?php

namespace App\Http\Requests\Admin;

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
        'name'=>'required|string|max:50',
        'email'=>'nullable|email|unique:users',
        'nik'=>'nullable|max:50',
        'no_ktp'=>'nullable|max:50',
        'job'=>'nullable|max:50',
        'address'=>'nullable|max:50',
        'rt'=>'nullable|max:10',
        'religion'=>'nullable|max:20',
        'place_of_born'=>'nullable|max:50',
        'born'=>'nullable|date',
        'gender'=>'nullable|max:10',
        'blood_type'=>'nullable|max:5',
        'education'=>'nullable|max:50',
        'status'=>'nullable|max:20',
        'photo_ktp'=>'nullable|image',
        'roles'=>'nullable|string|in:ADMIN,USER',
        ];
    }
}
