<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AutoMain;
use Illuminate\Support\Facades\Mail;

class email extends Controller
{

    public function test()
    {
        $data=['name'=>"Shahrin","data"=>"Hello laravel"];
        $user['to']='abdullahshahrin4.67@gmail.com';

        //$esub="mailing done";
        //$ebody="Hi from Abdullah Ibn Omor Shahrin";
        //Mail::to('tanvirahmed@aiub.edu')->send(new sendmail("hellow","mailing done"));
        Mail::send('mail',$data,function($message) use ($user)
        {
            $message->to($user['to']);
            $message->subject('An email from Shahrin_19-40199-1');
        }
    );
    }


}
