<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $commentRequest){

        
        $data = $commentRequest->all();
        $data['village_news_id'] = 
        $data['users_id'] = Auth::user()->id;
        Comment::create($data);
        return redirect()->back();

    }
}
