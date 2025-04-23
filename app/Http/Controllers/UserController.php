<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{


    public function index()
    {
        return view('dashboard');
    }
    // Login Section
    public function login(Request $request)
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        return view('dashboard');
    }



    /* Creat / Sing-UP Section */
    public function signup(Request $request)
    {
        return view('signup');
    }

    public function signupPost(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|lowercase|unique:users,email',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'ip' => $request->ip(),
            'password' => bcrypt($validateData['password']),
        ]);

        return redirect('/signup')>withErrors(['error' => 'Registration failed!']);
   
   
    }    



    /* Log Out */
    public function logout()
    {
        return view('login');
    }
   

   
  




}