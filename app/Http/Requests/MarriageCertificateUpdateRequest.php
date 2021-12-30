<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarriageCertificateUpdateRequest extends FormRequest
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
            'name_marry'=> 'nullable|max:50',
            'is_marry'=> 'nullable',
            'place_of_born_marry'=> 'nullable|max:50',
            'born_marry'=> 'nullable|date',
            'gander_marry'=> 'nullable|max:10',
            'job_marry'=> 'nullable|max:50',
            'religion_marry'=> 'nullable|max:20',    
            'address_marry'=> 'nullable|max:255',    
            'nik_marry'=> 'nullable|max:25', 
            'status_pengajuan'=> 'nullable|max:50', 
        ];
    }
}
