<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'slug',
        'day_of_born',
        'place_of_born',
        'born',
        'time_of_born',
        'name_father',
        'name_mother',
        'son_of',
        'name_son',
        'letter_interests',
        'photo_ktp_father',
        'photo_ktp_mother',
        'status',
    ];

    protected $hidden = [];

    public function user(){
        return $this->hasOne(User::class,'id', 'users_id');
    }

}
