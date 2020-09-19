<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    //

    

    public function index ()
    {
        return view('home');
    }

    public function login ()
    {
        return view('login');
    }

    public function dashboard ()
    {
        return view('dashboard');
    }

    public function register ()
    {
        return view('register');
    }

    public function home ()
    {
        return "WELCOME";
    }

    public function logout ()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        
        $user = User::where('email', $request->input('email'))->first();
        // dd($user);
        if(!empty($user)) {
            //check password
            
            if (!(\Hash::check($request->input('password'), $user->password))) {
                abort(403);
            }
            
            return view('dashboard', compact('user'));
            // return redirect('dashboard');
            // return $user;
            

        }
        return redirect()->back();
    }

    public function handleRegister(Request $request)
    {
        $user = User::where('email', $request->input('email'))->where('name', $request->input('name'))->first();
        if(empty($user)) {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);
            return redirect('/home');
        }
        return redirect()->back();
    }
}