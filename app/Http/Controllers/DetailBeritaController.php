<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\VillageNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailBeritaController extends Controller
{
    public function index(Request $request, $id){
        $news = VillageNews::with(['user','comment'])->where('slug', $id)->firstOrFail();
        // $comment = Comment::with(['villageNews','user'])->where('village_news_id', $id);
        return view('pages.detail-berita',[
            'news' => $news,
            // 'comment' => $comment,
        ]);
    }
    public function store(CommentRequest $commentRequest, $id){
        $data = $commentRequest->all();
        $data['village_news_id'] = $id;
        $data['users_id'] = Auth::user()->id;
        Comment::create($data);
        return redirect()->back();

    }
}
