<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'photo_ktp',
        'status_marry',
        'name_marry',
        'place_of_born_marry',
        'born_marry',
        'gander_marry',
        'job_marry',
        'religion_marry',    
        'address_marry',    
        'nik_marry',
        'photo_ktp_marry',
        'status_pengajuan',
    ];

    protected $hidden = [];

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }

}
