<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view("login");
    }
    //Login
    public function login(Request $request)
    {
        $user = User::where(["email" => $request->email])->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                //Setting sessions
                $request->session()->put("user", $user);
                //Redirect after successful login
                return redirect("/");
            }else{
                return "Password not found";
            }
        }else{
                return "User not found";
        }

    }
}
