<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function signup(){
        return view('auth.signup');
    }
    
    public function userHome()
    {
        $user = auth()->user(); 
        return view('adminPages.userHome', compact('user'));
    }
    function loginPost(Request $request) 
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.users')
                    ->with("success", "Welcome Admin!");
            }
            // else if ($user->role === 'user') {
            //     return redirect()->route('home')
            //         ->with("success", "Welcome User!");
            // }
             else {
                return redirect()->route('user.userHome')
                    ->with("success", "Welcome User!");
            }
        }

        return redirect()->route('login')
            ->with("error", "Email or password are not correct!");
    }

    function signupPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'age' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['age'] = $request->age;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if(!$user) {
            return redirect(route('signup'))->with("error", "login details are not correct!");
        }
        return redirect()->intended(route('login'))->with("success", "sign up details are correct!");


    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('login'));

    }

}
