<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login(Request $req)
   
    {
        $req->validate([
            'Email' => 'required|email',
            'Pwd' => 'required',
        ]);
        $userFound=admin::where(['Email'=>$req->Email])->first();
        if($userFound)
        {
            //return $userFound;
             if (($req->Pass)==$userFound->Pass)
             {
                //dd('hii');
                //return $userFound;
                $req->session()->put('admin', $userFound->id);
                return view('admin.admin1');
            }
            else
              return "Wrong";
        }
    }

    
    public function index()
    {
        return view('admin.asign');
    }

    public function ad()
    {
        return view('admin.admin1');
    }


    public function logout()
    {
        if(Session()->has('sign'))
        {
            Session()->pull('sign');
            return redirect('admin.asign');
        }
    }
}
