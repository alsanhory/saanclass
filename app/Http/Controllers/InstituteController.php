<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Institutebranch;
use App\User;
use App\Course;
use App\Nextcourse;
use App\Nextcoursetag;
use Validator;
use Auth;
class InstituteController extends Controller
{
    
    
    public function addNewInstitute(){
        return view('institutes.addnew');
    }

    public function saveNewInstitute(Request $request){
     //dd($request->all());
        $validator= \Validator::make($request->all(),[
            "institutetype" => "required",
            "city"          => "required",
            "neighborhood"  => "required",
            "phone1"        => "required",
            "intitutelink"  => "required",
            "email"         => "required",
            "password"      => "required|confirmed",
        ]);
        
        if($validator->fails()){
            return Back()->withInput()->withErrors($validator);
        } else{
           
           $user =new User;
           $user->name=$request->name;
           $user->email=$request->email;
           $user->password=\Hash::make($request->password);
           $user->accounttype='institute';
           $user->save();
            
           $institute= new Institute;
           $institute->user_id=$user->id;
           $institute->name=$request->name;
           $institute->institutetype=$request->institutetype;
           $institute->accountnumber=$request->accountnumber;
           $institute->intitutelink=$request->intitutelink;
           $institute->email=$request->email;
           $institute->phone=$request->phone;
           $institute->save();

           $institutebranch=new Institutebranch;
           $institutebranch->institute_id=$institute->id;
           $institutebranch->address=$request->address;
           $institutebranch->city=$request->city;
           $institutebranch->neighborhood=$request->neighborhood;
           
           $institutebranch->phone1=$request->phone1;
           $institutebranch->phone2=$request->phone2;
           $institutebranch->isMain=true;
           $institutebranch->save();
           return redirect('institute/login');
        }
    }



    public function institutelogin(Request $request){
        $validator=\Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return Back()->withInput()->withErrors($validator);
        } else {
            $login=\Auth::attempt([
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
            if($login){
                return redirect()->intended('institutedashboard');
            } else{
                return Back()->withInput()->withErrors('بيانات تسجيل الدخول غير صحيح');
            }
        }
    }



    public function dashboard(){
        return view('institutes.dashboard');
    }

    public function showcourses(){
        $courses=Course::all();
        return view('institutes.courses')
        ->with('courses',$courses);
    }

    public function submitcourse(Request $request){
        
      $validator=\Validator([
          'name'=>'required',
          'section'=>'required',
      ])->validate();
      $course= new Course;
      $course->name=$request->name;
      $course->institute_id=\Auth::user()->id;
      $course->section_id=$request->section;
      $course->hours=$request->hours;
      $course->description= $request->description;
      $course->price= $request->price;
      $course->save();
      \Session::flash('message','Course Added');
      return \Redirect::to('institute/courses');


    }

    public function addnextcourse(){
        $user=Auth::user();

        $coursesForSelect=array('0'=>'اختر الدورة');
        $allcourses= Course::where('institute_id',$user->id)->pluck('name','id');
        foreach($allcourses as $key=>$value){
            $coursesForSelect[$key]=$value;  
        }

        //$locationsForSelect=array('0'=>'اختر المكان');
        $locationsForSelect= Institutebranch::where('institute_id',$user->id)->pluck('branchname','id');
        
       // dd($coursesForSelect);  
        return view('institutes.addnextcourse')
        ->with('coursesForSelect',$coursesForSelect)
        ->with('locationsForSelect',$locationsForSelect);
    }

    public function savenextcourse(Request $request){
        
       
        $validator= Validator::make($request->all(),[
            "course" => "required",
            "location" => "required",
            "coursedate" => "required",
            "fromtime" => "required",
            "totime" => "required",
            "days" =>"required",
            
        ])->validate();
        
        $coursedata= Course::find($request->course);
        
        $nextcourse=new Nextcourse;
        $nextcourse->course_id=$coursedata->id;
        $nextcourse->course_name=$coursedata->name;
        $nextcourse->course_description=$coursedata->description;
        $nextcourse->course_price=$coursedata->price;
        $nextcourse->trainer=$request->trainer;
        $nextcourse->trainerdescription=$request->trainerdescription;
        $nextcourse->location=$request->location;
        $nextcourse->address=$request->address;
        $nextcourse->city=$request->city;
        $nextcourse->neighborhood=$request->neighborhood;
        $nextcourse->coursedate=$request->coursedate;
        $nextcourse->fromtime=$request->fromtime;
        $nextcourse->totime=$request->totime;
        $nextcourse->days=$request->days;
        $nextcourse->poster=$request->poster;
        $nextcourse->offer=$request->offer;    
        $nextcourse->save();
        
        $tags=explode(" ",$request->tags);
        if(!empty($tags)){
            //dd($tags);
            foreach($tags as $tag){
                
                $coursetag= new Nextcoursetag;
                $coursetag->tag_type='course';
                $coursetag->object_id=$nextcourse->id;
                $coursetag->tagname=$tag;   
                $coursetag->save();   
            }
            
        }
        \Session::flash('message','تم الاعلان عن الدورة القادمة');
        redirect('institute/courses');
    }
} 
