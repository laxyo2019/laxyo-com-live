
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
        
        <a href="{{url('/career_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career</span></a>
        </li>
          <li><a href="{{url('/contact_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact</span></a></li>
                  
        <li><a href="{{url('/post_yolax')}}" class="app-menu__item active"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job Post</span></a></li>
        <li><a href="{{url('/sitevars_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Site Vars</span></a></li>
        
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
   
      <form method="post" action="{{action('YolaxjobController@update', $post->id)}}">
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
                <div class="col-md-12 col-sm-12">
                  <label for="postname">Job Title*</label>
                  <input type="text" name="jobtitle" id="jobtitle" class="form-control" value="{{$post->job_title}}">
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

@endsection