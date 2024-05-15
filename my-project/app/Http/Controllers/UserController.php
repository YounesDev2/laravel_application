<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function Login()
    {

        return view('auth.login');
    }

    public function Register()
    {

        return view('auth.register');
    }

    public function Forgot_password()
    {

        return view('auth.forgot');
    }


    public function Reset_password()
    {

        return view('auth.reset');
    }

    public function saveUser(Request $request)
    {

        $validator = Validator::make($request->all(),[
            "name" => "required|max:50",
            "email" => "required|max:100|unique:users|email",
            "password" =>"required|min:6|max:50",
            "cpassword" =>"required|same:password",
        ],[
            "cpassword.same" => "Confirm Passowrd is incorrect",
            "cpassword.required" => "Confirmation of Password is required!"
        ]);
        if($validator->fails()){
        return response()->json([
            "status" => $validator->getMessageBag()
        ]);
        }

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            "status" => "Registerd User Successfully"
        ]);

    

    }
}
