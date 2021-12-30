<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nik'=>['nullable','max:50',],
            'no_ktp'=>['nullable','max:50',],
            'job'=>['nullable','max:50'],
            'address'=>['nullable','max:50'],
            'rt'=>['nullable','max:10'],
            'religion'=>['nullable','max:20'],
            'place_of_born'=>['nullable','max:50'],
            'born'=>['nullable','date'],
            'gender'=>['nullable','max:10'],
            'blood_type'=>['nullable','max:5'],
            'education'=>['nullable','max:50'],
            'status'=>['nullable','max:20'],
            'roles'=>['nullable','string','in:ADMIN,USER'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // $file_extention = $data['photo']->getClientOriginalExtension();
        // $file_name = time().rand(99,999).'image_profile.'.$file_extention;
        // $file_path = $data['photo']->move(public_path().'/users/image',$file_name);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'],
            'born' => $data['born'],
            'address' => $data['address'],
            'place_of_born' => $data['place_of_born'],
            'gender' => $data['gender'],
            'rt' => $data['rt'],
            'religion' => $data['religion'],
            'status' => $data['status'],
            
        ]);

        if(request()->hasFile('photo_ktp')){
            $photo_ktp = request()->file('photo_ktp')->store('assets/ktp','public');
            $user->update(['photo_ktp'=> $photo_ktp]);
        }

        return $user;

    }

    public function check(Request $request){
        return User::where('email', $request->email)->count()>0 ? 'Unavailable' : 'Available';
    }
}
