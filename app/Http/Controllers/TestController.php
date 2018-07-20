<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testing1(){
    
        return view('test');
    }

    public function testing2(Request $request){
        return back()->withInput();
        // dd($request->path());
    }
}
