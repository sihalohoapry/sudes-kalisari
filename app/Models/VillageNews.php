<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VillageNews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'users_id',
        'news_content',
        'slug',
        'date',
        'photo',
    ];

    protected $hidden = [];

    public function user(){
        return $this->hasOne(User::class,'id','users_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'village_news_id','id');
    }

}
