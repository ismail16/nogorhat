<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1){
            $this->redirectTo == route('admin.dashboard');
        }else{
            $this->redirectTo == route('index');
        }
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
//        dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'district' => $data['district'],
            'thana' => $data['thana'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'status' => $data['status'],

        ]);
    }
}
