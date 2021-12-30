<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomicileLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'citizen',
        'letter_interests',
        'photo_kk',
        'status_letter',
    ];

    protected $hidden = [];

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }

}
