<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Validation\Rule;
class UsersCustomeController extends Controller
{
    public function showregister(){
        return view('users.register');
    }

    public function makeregisteration(Request $request){
        $valdationdata=Validator::make($request->all(),[
            'fullname' => 'required|max:255',
            'email' => 'required|unique:users|',
            'password'=>'required|confirmed'
        ])->validate();
       /*
        if($valdationdata->fails()){
            return redirect('register')
                        ->withErrors($valdationdata)
                        ->withInput();
        } else 
        {
           */
            $user= new User;
            $user->name=$request->fullname;
            $user->email=$request->email;
            $user->password=\Hash::make($request->password);
            $user->accounttype='normaluser';
            $user->save();
            //dd($user);
        //}
        
        
    }


    public function showuserlogin(){
        return view('users.userlogin');
    }

    public function loginuser(Request $request){
        $res=\Auth::attempt(
            ['email'=>$request->email,
            'password'=>$request->password]
        );
        if($res){
           return redirect()->intended('user');
        } else{
            return Back()->withInput()->withErrors('Invalid Login');
        }
    }

    
}
