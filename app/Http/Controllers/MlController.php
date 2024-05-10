<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MlController extends Controller
{
    public function index()
    {
        // echo "hello";
        $data=['name'=>"You are signed up in for TIFFIN SERVICE",'data'=>"Hello"];
        $user['to']='tejmandaliya1666@gmail.com';
        Mail::send('mail',$data,function($messages) use($user){;
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('login');
    }
}
