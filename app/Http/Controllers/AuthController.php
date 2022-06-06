<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login', ['title' => 'Login']);
    }

    public function registerPage(){
        return view('auth.register', ['title' => 'Register']);
    }

    public function login(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'Email or Password is incorrect, please try again'
            ]);
        }
        else{
            return redirect('/');
        }
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        auth()->login($user);
        return redirect('/');
    }
    public function update(Request $request){
        $id = Auth::user()->id;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        User::whereId($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return back();
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
