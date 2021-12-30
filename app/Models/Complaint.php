<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'users_id',
        'name',
        'title',
        'slug',
        'content',
        'date',
        'photo',
        'letter_status',
    ];

    protected $hidden=[];

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }

}
