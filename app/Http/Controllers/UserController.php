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

    /* Get All User */
    public function getUser()
    {
        $users = User::all();
        return response()->json($users);
    }

    /* Get Single User */
    public function getsingleUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /* Create single User */
    public function creatUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'role' => 'required',
            'name' => 'required|string',
            'email' => 'required|string|email|lowercase|unique:users,email',
            'password' => 'required|min:6',
            'ip_address' => $request->ip(),
        ]);
        $user = User::create($request->all());
        return response()->json(['message' => 'user create succesfull!', 'data' => $user]);
    }

    /* Update single User */
    public function updateUser(Request $request, $id)
    {
        
        $request->validate([
            'role' => 'required',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'. $id,
            'password' => 'required|min:6',
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['message' => 'success', 'data' => $user]);
    }



    /* Delete Single User */
    public function deleteUser(Request $request, $id)
    {
        User::destroy($id);
        return response()->json(['message' => 'User Delete', 'data' => null]);
    }


    /* Log Out */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('sign-in')->with('success', 'Logout Successfully!');
    }





}