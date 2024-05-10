<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Mail;
use Session;
class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('index');
    }

    public function log()
    {
        return view ('login');
    }

    public function home2()
    {
        return view ('home2');
    }

    public function excel()
    {
        return view('excel');
    }
    public function login(Request $req)
   
    {
        $req->validate([
           
            'Email' => 'required|Email',
            'Pwd' => 'required',
        ]);

        $userFound= signup::where(['Email'=>$req->Email])->first();
        if($userFound)
        {
             //return $userFound;
            
              if(md5($req->Pwd)==$userFound->Pwd)
              {
                
                
               $req->session()->put('signup', $userFound->id);
                 return redirect('dashboard');
             }
             else
            {
                return back()->with('fail', 'Password doesnot match..!!');    
            }
        }
       
   }
  

   public function dashboard(Request $request)
   {
       //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
       $myData = array();
       if (Session()->has('signup'))
       {
           $myData = signup::where('id',"=", Session()->get('signup'))->first();            
       }
       return view('home2', compact('myData'));
   }

   //
   

//    public function logout()
//    {
//        if (Session()->has('loginId'))
//        {
//            Session()->pull('loginId');
//            return redirect('login');
//        }
//    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
             'Name' => 'required',
             'Email' => 'required|',// unique:signup
            'Pwd'=>'required|min:4',
           

        ]);
        // $data=['name'=>"Tej",'data'=>"Hello Tej Mail From Laravel"];
        // $user['to']='tejmandaliya1666@gmail.com';
        // Mail::send('signup',$data,function($message) use ($user){
        //     $message->to($user['to']);
        //     $message->subject('Hello Tej');
        $signup = new SignUp;
        $signup->Name=$request['Name'];
        $signup->Email=$request['Email'];
        $signup->Pwd=md5($request['Pwd']);

       
        $signup->save();

        $data=['name'=>"You are signed SUCCESSFULLY in  HOMEKART Service",'data'=>"Hello {$request['Name']}"];
    
        $user['to']=$request['Email'];
        Mail::send('mail',$data,function($messages) use($user){;
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('login');
    }

      public function view()
      {

         $allRecords=signup::all();
         return view('view',compact('allRecords'));
      }

      public function dele(Request $req)
    {
        
        $data=signup::find($req->id)->delete();
        return redirect('view');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function edits($id)
    {
        $data=signup::where('id',"=",$id)->first();
        return view('updateform',compact('data'));
        
    }

    //contact page
    public function cont()
    {

        return view('contact');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $req)
    {
        $data=signup::find($req->id);
        $data->name=$req->Name;
        $data->email=$req->Email;
        $data->save();
        return redirect('view');
    }

    // --------Profile--------------------

    public function profile($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('pupdate',compact('rec'));
       
    }

    public function proupdate(Request $req)
    {
        $rec=signup::find($req->id);
        $rec->name=$req->Name;
        $rec->email=$req->Email;
        
        $rec->save();
        return view('pupdate',compact('rec'));
    }
    public function proedit($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('profilredit',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    //----------Profile----------
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignUp $signUp)
    {
        //
    }

    public function list(){
        $view=SignUp::get();
        return view('view',['view'=>$view]);
    }
}


// 