<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'village_news_id',
        'users_id',
        'comment',
    ];

    public function villageNews(){
        return $this->belongsTo(VillageNews::class,'village_news_id', 'id');
    }

    public function userComment(){
        return $this->hasOne(User::class, 'id','users_id' );
    }

}
