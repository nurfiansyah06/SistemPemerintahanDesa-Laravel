<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Fam;
use App\Birth;


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
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $birth = new Birth;
        $birth->tgl_lahir = $request->tgl_lahir;
        $birth->tmpt_lahir = $request->tmpt_lahir;
        $birth->save(); 
    
        return User::create([
            'nik' => $data['nik'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_kk'=> $data['no_kk'],
            'no_aktalahir'=>$data['no_aktalahir'],
            'no_aktakematian'=>$data['no_aktakematian'],
            'tgl_lahir'=>$data['tgl_lahir'],
            'tmpt_lahir'=>$data['tmpt_lahir'],
            'agama'=>$data['agama'],
            'jns_kelamin'=>$data['jns_kelamin'],
            'jns_pekerjaan'=>$data['jns_pekerjaan'],
            'alamat'=>$data['alamat'],
            'status_kawin'=>$data['status_kawin'],
        ]);
    }
}
