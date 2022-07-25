<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class UserController extends Controller
{
    //
    function login(Request $req)
    {

        //  $req->validate(
        //  [

        //      'email'=>'required',
        //      'password'=>'required'

        //  ],
        // [
        //         'email.required'=>'Please give your  email',
        //         'password.required'=>'Please give password',

        // ]
        // );

         $user= User::where('email',$req->email)->first();
         if(!$user || !Hash::check($req->password,$user->password))
         {
             return response(['error'=>["email or password doesn't match."]]);

        }
        return $user;





    }
    function register(Request $req)
    {

        $this->validate($req,
        [
            'name'=>'required ',
            'email'=>'required ',
            'password'=>'required||max:6 ||min:5',

        ],
        [
                'name.required'=>'Please provide your name',
                'email.required'=>'Please provide your email',
                'password.required'=>'Please provide password',
                'password.max'=>'Username should not exceed 6 characters,numbers, signs',
                'password.min'=>'Username should contain at least 5 characters,numbers, signs'

        ]
        );

        $user= new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Hash::make($req->input('password'));
        $user->save();
        return $user;

    }
}
