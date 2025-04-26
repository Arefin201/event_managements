<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


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
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::where('email', $request->email)->firstOrFail();

        // Check credentials
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication passed...
            return redirect('/')->with('success', 'Login Successfully!');
        }
        // Authentication failed...
        return redirect('sign-in')->withErrors(['error' => 'Invalid credentials!']);


        /* Another way 


      // Validate input
             $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            //Check if email exists
            $user = DB::table('users')->where('email', $request->email)->first();

            if (!$user) {
                return redirect()->back()->withErrors(['email' => 'This email does not exist.']);
            }

            // Check password
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->withErrors(['password' => 'Incorrect password.']);
            }

            // Authenticate the user
            Auth::loginUsingId($user->id);


            return redirect('/');



        */


    }



    /* Creat / Sing-UP Section */
    public function signup(Request $request)
    {
        return view('signup');
    }

    public function signupPost(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|string|email|lowercase|unique:users,email',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'ip_address' => $request->ip(),
            'password' => bcrypt($validateData['password']),
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/sign-in')->with('success', 'User Created Successfully!');
        }

        return redirect('/sign-up')->withErrors(['error' => 'Registration failed!']);
    }



    /* Log Out */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('sign-in')->with('success', 'Logout Successfully!');
    }








}