<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function addNewInstitute(){
        return view('institutes.addnew');
    }
}
