<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\useraccount;

class Project extends Controller
{

    public function regAccount(Request $request)
    {
        $values=[
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'username'=>$request->uname,
            'password'=>hash::make($request->upass),
            'confirmPassword'=>hash::make($request->cpass)
        ];

        if($request->upass == $request->cpass){
            $cmdCreate=useraccount::create($values);
           return response()->json(['status'=>200,'msg'=>'Account has been successfully created.', 'data'=>$cmdCreate]);
        }else{
           return response()->json(['status'=>500, 'msg'=>'Password does not match.']);
        }
    }

    public function fetch_login(Request $request)
    {
        $username = $request->uname;
        $password = $request->upass;

        $query = useraccount::where('username',$username)->first();
        if(!$query)
        {
            return response()->json(['status'=>201,'msg'=>"Unrecognized Username!"]);
        }
        else
        {
            if(Hash::check($request->upass, $query->password))
            {
                $request->session()->put('UID', $query->userID);
                $request->session()->put('firstName', $query->firstName);
                return redirect('/GrabPanda');
            }
            else
            {
                return response()->json(['status'=>201,'msg'=>"Invalid Login Account!"]);
            }
        }
    }

    public function logout(Request $request)
    {
        if(session()->has('UID')){
            session()->pull('UID');
            return view('/login');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function landing(Request $request)
    {
        return view('landing');
    }
}
