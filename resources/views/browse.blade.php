<?php 
use App\Course;
use App\Institute;
 ?>
@extends('layouts.main')
@section('title','سان كلاس - SaanClass')
@section('content')
@if(count($courses))

@foreach($courses as $course)
<?php
$coursedata=Course::where('id',$course->course_id)->first();
$institute=Institute::where('id',$coursedata->institute_id)->first();
?>
  <div class="well">
      <div class="media">
      	<a class="pull-right" href="#">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">{{$course->course_name}}</h4>
          <p class="text-left">By {{$institute->name}}</p>
          <p>{{$course->course_description}}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>
  @endforeach
@endif

@endsection