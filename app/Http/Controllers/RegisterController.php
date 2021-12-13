<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function register()
   {
       return view('register.register', [
           'title' => 'Register'
       ]);
   }

   public function store(Request $request)
   {
        $validatedData = $request->validate([
            'name' => 'required|min:6|max:255',
            'username' => 'required|min:6|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

     User::Create($validatedData);

    $request->session()->flash('success', 'Registrasi Anda Berhasil Silahkan login Untuk Melanjutkan');


    return redirect('/login');

   }
}
