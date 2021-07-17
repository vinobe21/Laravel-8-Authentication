<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('Auth/login');
    }
    public function register(){
        return view('Auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|max:9'
        ]);

        $user= new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= Hash::make($request->password);
        $save=$user->save();
        
        if($save){
            return back()->with('success', 'User Added Successfully..');
        }else{
            return back()->with('fail', 'Something worng try again..');
        }
    }
    public function check(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:3|max:9'
        ]);

        $user= User::where('email','=',$request->email)->first();
        if(!$user){
            return back()->with('fail', 'Please create new account..');
        }else{
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('users', $user->id);
                return redirect('Admin/dashboard');
            }else{
                return back()->with('fail', 'incorrect password');
            }
        }
    }
    public function logout(){
        if(session()->has('users')){
            session()->forget('users');
            return redirect('Auth/login');
        }
    }
    public function dashboard(){
        return view('Admin.dashboard');
    }
}
