<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index(){

        $data = Auth::user();

        return view('pages.profile',[
            'user' => $data
        ]);
    }
}
