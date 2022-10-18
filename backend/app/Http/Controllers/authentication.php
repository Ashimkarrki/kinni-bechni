<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userinfo;
class authentication extends Controller
{
    public function register(Request $req){
        if($req->password === $req->confirmPassword){
            $user_instance =  new userinfo;
            $user_instance->email = $req ->email;
            $user_instance->college = $req ->collage;
            $user_instance->Password = $req ->password;
            $user_instance->Full_name = $req ->userName;
            $user_instance->save();
        }
        else{
            return response()-> json([
                'status'=>200,
                'message'=> "Password and confirm password column is not same",
            ]);
        }

    }
    public function login(Request $req){
        
        
    }
};
