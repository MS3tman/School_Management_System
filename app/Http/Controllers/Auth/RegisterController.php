<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Nette\Utils\Validators;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function register(Request $request){
        $data_validate = Validator::make($request->all(),[
            'school_name'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required|min:8'
        ]);

        if(!$data_validate->fails()){
            Register::create($request->all());
            return redirect('login');
        }
        else{
            return redirect()->back();
        }
    }
}
