<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function login(Request $request){
        //dd($request->all());
        $data_validate = validator::make($request->all(),[
            'email'=>'required|email|unique:registers',
            'password'=>'required|min:8',
        ]);

        $user_data = Register::where('email',$request->email)->first();
        if($request->email === $user_data->email && $request->password === $user_data->password){
            return redirect('school/dashboard');
        }
        else{
            return redirect()->back()->with('error','plase enter correct email and password');
        }

          // $remember = !empty(Auth::check())? true : false;
        // if(Auth::attempt(['email'=>$request->email , 'password'=>$request->password])){
        //     return redirect('school/dashboard');
        //    // return redirect()->intended('school.dashboard');
        // }
        // else{
        //     return redirect()->back()->with('error','plase enter correct email and password');
        // }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }
}


