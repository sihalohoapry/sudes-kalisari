<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Businesslicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'slug',
        'business_name',
        'business_type',
        'business_address',
        'business_activity',
        'photo_ktp',
        'date',
        'status', //Menunggu / diterima / ditolak
    ];

    protected $hidden=[];

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }

}
