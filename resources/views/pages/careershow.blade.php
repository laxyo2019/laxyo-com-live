@extends('layouts.app')
@section('title','Career Form For Apply - Laxyo Energy Limited')

	
<style>
	 label{
    font-size: 30px;
   }
  
</style>
<!--Start TITLE PAGE-->	
@section('body')	
<section class="title_page bg_3">			
<div class="container">				
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Career</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Career</li>							
</ul>						
</nav>					
</div>				
</div>			
</div>		
</section>		
<!--End TITLE PAGE-->
<section class="content sb_right">
<div class="container">				
<div class="row">					
	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
		<div class="intro_box">
			<h1>Career <span>With Us</span></h1>
		</div>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
	     <div class="card">
        <div class="card-body">
          <div class="col-md-12 col-sm-12">
            <a href="{{url('/careers')}}" style="font-size: 20px;">back</a>
            <hr>
          </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Job Title</label> 
              </div>
              <div class="col-md-8">
                <label>{{$post->job_title}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Job Location</label> 
              </div>
              <div class="col-md-8">
                <label>{{$post->job_location}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Experience</label> 
              </div>
              <div class="col-md-8">
                <label>{{$post->min_exp}} to {{$post->max_exp}} yr</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Resume</label> 
              </div>
              <div class="col-md-8">
                @if($post->resume_req == '1')
                <label>Necessary</label>
                @else
                <label>No Necessary</label>
                @endif
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Salary</label> 
              </div>
              <div class="col-md-8">
                <label>{{$post->sal_min}} To {{$post->sal_max}}</label> 
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Closing Date</label> 
              </div>
              <div class="col-md-8">
                <label class="text-danger">{{$post->close_dt}}</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Candidate Need</label> 
              </div>
              <div class="col-md-8">
                <label>{{$post->no_of_pos}}</label>
              </div>
            </div>
             <div class="col-md-12 col-sm-12">
              <div class="col-md-4">
               <label>Description</label> 
              </div>
              <div class="col-md-8">
                <label><?php echo $post->job_desc ?></label>
              </div>
            </div>
        </div>
       </div>   
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>
</section>


@endsection