<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Foundation\Auth\User as Authenticatable;


class AccountController extends Controller
{
    //
    public function user(){
        return view('trainees.register');
    }
    
    public function regi(Request $request){
         //dd($request);
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $newstudent = User::create($data);
         return redirect(route('trainee.index'));
    }

    public function loginform(){
        return view('trainees.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('trainee.index'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    
}
