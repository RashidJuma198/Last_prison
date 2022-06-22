<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\User;
class AuthController extends Controller
{
    //Registering User
    public function register(Request $request){
        //Validate fields before registering
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string|confirmed'
        ]);
        //Create the User
        $user =User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
        ]);

        //Create a token
        $token =$user->createToken('myapptoken')->plainTextToken;

        //Getting Response
        $response = [
            'user'=> $user,
            'token'=>$token
        ];

        return response($response,201);
    }

    public function login(Request $request){
        //Validate fields before registering
        $fields = $request->validate([
            
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        //Check the mail
        $user = User::where('email',$fields['password'])->first();
        //Check User and Password
        if(!$user || !Hash::check($fields['password'],$user->password))
        {
            return [
                'Message'=>'Wrong Credentials'
            ];
        }
    }
    //Delete a Token after log out
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return [
            'Message'=>'Logged Out'
        ];
    }
}
