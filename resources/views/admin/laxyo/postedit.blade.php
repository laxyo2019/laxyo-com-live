
@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
         
        </div>
      </div>
     <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li>
        <a href="{{url('/admin-career')}}" class="app-menu__item"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career</span></a>
        </li>
         <li><a href="{{url('/admin-vender')}}" class="app-menu__item "><i class="app-menu__icon fa  fa-registered"></i><span class="app-menu__label">Vender Registration</span></a></li>
          <li><a href="{{url('/admin-contact')}}" class="app-menu__item "><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact</span></a></li>
        <li><a href="{{url('/admin-feedback')}}" class="app-menu__item "><i class="app-menu__icon fa fa-comments-o"></i><span class="app-menu__label">Feedback</span></a></li>
                  
        <li><a href="{{url('/admin-post')}}" class="app-menu__item active"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job Post</span></a></li>
        <li><a href="{{url('/admin-sitevars')}}" class="app-menu__item "><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Site Vars</span></a></li>
        
      </ul>
    </aside> 
<main class="app-content">
<div class="container">
    <div class="row pull-right"> 
<a href="{{url('/admin-post')}}" class="btn btn-success">Back</a>
</div>
<div class="row justify-content-center">
  <div class="col-md-12">

<div class="card uper">
  
  <div class="card-header bg-dark" style="color: white">
    <h1>Page Update here</h1>
  </div>
  <div class="card-body">
   
      <form method="post" action="{{action('PostController@update', $post->id)}}">
         <div class="form-group">
              {{@csrf_field()}}          
              <input type="hidden" name="_method" value="PATCH">
              <div class="row">
                <div class="col-md-12">
                   <label for="postname">Active Form*</label>
                   <input type="text" name="active" id="active" class="form-control" value="{{$post->active}}">
                </div> 
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="postname">Job Title*</label>
                  <input type="text" name="jobtitle" id="jobtitle" class="form-control" value="{{$post->job_title}}">
                </div>
                <div class="col-md-6">
                  <label for="vacancy">location*</label>
                  <input type="text" name="location" id="location" class="form-control" value="{{$post->job_location}}">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <label for="vacancy">Experience*</label>
                  <select name="experience" id="experience" class="form-control" value="{{$post->exp}}">
                    <option value="fresher">fresher</option>
                    <option value="1 - 15 yrs(Experience)">1 - 15 yrs(Experience)</option>
                    <option value="15+ yrs">15+ yrs</option>
                  </select>
                </div>
                <div class="col-md-6">
                     <label for="">Resume Necessary*</label>
                     <select name="resume" id="resume" class="form-control" value="{{$post->resume_req}}">
                      <option value="">Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
              </div>

              
              <div class="row">
                
                <div class="col-md-6">
                  
                    <label for="">Salary From:</label>
          
                     <input type="text" name="salaryfrom" id="salaryfrom" class="form-control" value="{{$post->sal_min}}">
            
                </div>
                 
                <div class="col-md-6">
                
                    <label for="" >Salray To:</label>
                  
                     <input type="text" name="salaryto" id="salaryto" class="form-control" value="{{$post->sal_max}}">
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                   <label for="startdate">Closing Date*</label>
                   <input type="text" name="closingdate" id="closingdate" class="form-control" value="{{$post->close_dt}}" readonly="true">
                     @if(session()->get('warning'))
                     <span class="text-danger">
                        {{ session()->get('warning') }}  
                      </span>
                    @endif
                </div>
                <div class="col-md-6">
                  <label for="startdate">Candidate Count*</label>
                  <input type="text" name="candidatecount" id="candidatecount" class="form-control" value="{{$post->cand_count}}">
                </div>
              </div>
              
             <div class="row">
               <div class="col-md-12">
                 <label for="">Description*</label>
                 <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{$post->job_desc}}</textarea>
               </div>
             </div>
             <br>
          <button type="submit" class="btn btn-primary">Edit Post</button>
      </form>
  </div>
</div>
</div>
</div>
</main>
<script>
   $(document).ready(function(){
      $("#closingdate").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: 0
    });
     $('#closingdate').on('keypress',function(){
         $('#closingdate').attr('readonly',true);
     });
     
   });
   
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection