<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function detailUser($id){
        $user = User::findOrFail($id);
        return view('pages.profile-detail',[
            'user'=> $user
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }else{
            unset($data['password']);
        }

        if($request->email){
            $data['email'] = $request->email ;
        }else{
            unset($data['email']);
        }
        if($request->photo_ktp){
            $data['photo_ktp'] = $request->file('photo_ktp')->store('assets/foto-update','public');
        }else{
            unset($data['photo_ktp']);
        }

        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('profile');

    }
}
