<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auth;
class authentication extends Controller


{
    public function signup(Request $request){
        // $message = ['email.required'=>"Something is wrong",'name.required'=>"name is wrong",'password.required'=>"password is wrong",'confirm_password.required'=>"password is wrong"];
        // $request->validate([
        //     'email'=>'required | max:20',
        //     'name'=>'required | max:20',
        //     'password'=>'required|min:8|max:13',
        //     'confirm_password'=>'required'
        // ], $message);

            if ($request->password === $request->confirm_password){
                $usercontroller_inst = new auth;
                $usercontroller_inst->email = $request->email;
                $usercontroller_inst->name = $request->name;
                $usercontroller_inst ->password = $request-> password;
                $usercontroller_inst ->college = $request ->college;
                $usercontroller_inst->save();
                return response()->json([
                    'status' => '200',
                    'message'=>'Registered successfully',
                ]);}
            else{
                return "Password and Confirm Password field should be same";
            }
        }
    
    

    
    public function login(Request $request){
        $user = auth::where('email', $request->email)->first();
        if ($request->password===$user->password){
            return Response()->json([
                "Status"=>200,
                "Message"=>"User Logged in successfully"
            ]);
    }
        else{
            return response()->json([
                "message"=>"Unable to log in"
            ]);
                
            }
        }
    public function logined(Request $request){
    }

    public function logout(Request $request){
        return redirect("login");
    }
};

