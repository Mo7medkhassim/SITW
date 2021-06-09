<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {

        return view('dashboard.login_admin');
    }


    public function Login(Request $request)
    {

        $validation = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //  get only email & password
        $email = $request->email;
        $password = $request->password;

        // use Auth to check if data existe i database
        // Authentication passed...

        if(auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])){

            return redirect()->route('dashboard.home');

        }

        return redirect()->back();

    }

    // logout
    public function logout(){

        Auth::guard('admin')->logout();

        return redirect()->route('dashboard.login');
    }
}
