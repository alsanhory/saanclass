<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nextcourse;
class CourseController extends Controller
{
    public function browse(){
        $courses= Nextcourse::all();
        return view('browse')
        ->with('courses',$courses);
    }
}
