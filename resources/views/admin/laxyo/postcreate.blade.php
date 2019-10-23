
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
  
<div class="row">
  @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
</div> 
<div class="row pull-right"> 
<a href="{{url('/admin-post')}}" class="btn btn-success">Back</a>
</div>
<div class="row">
  <div class="col-md-12">
  
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Add Post</h1>

  </div>
  <div class="card-body">
  
      <form method="post" action="{{route('admin-post.store')}}">
        
          <div class="form-group">
             {{@csrf_field()}}
             <div class="row">
                 <div class="col-md-6">
                   <label for="postname">Job Title*</label>
                   <input type="text" name="jobtitle" id="jobtitle" class="form-control"value="{{old('jobtitle')}}">
                  </div> 
                  
                 <div class="col-md-6">
                 <label for="vacancy">location*</label>
                 <select name="location" id="location" class="form-control">
                   <option value="">Select Location</option>
                   @foreach($loc as $locs)
                      @if($locs->site_code == '001' && $locs->tag == 'career_locations')
                      <option value="{{$locs->title}}">{{$locs->title}}</option>
                      @endif
                   @endforeach
                 </select>
                 
               </div>
             </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="vacancy">Experience*</label>
                  <select name="experience" id="experience" class="form-control">
                    <option value="fresher">fresher</option>
                    <option value="1 - 15 yrs(Experience)">1 - 15 yrs(Experience)</option>
                    <option value="15+ yrs">15+ yrs</option>
                  </select>
                </div>
                <div class="col-md-6">
                     <label for="">Resume Necessary*</label>
                     <select name="resume" id="resume" class="form-control">
                      <option value="">Select</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                </div>
              </div>

              
              <div class="row">
                
                <div class="col-md-6">
                  
                    <label for="">Salary From:</label>
          
                     <input type="text" name="salaryfrom" id="salaryfrom" class="form-control" value="{{old('salaryfrom')}}">
            
                </div>
                 
                <div class="col-md-6">
                
                    <label for="" >Salary To:</label>
                  
                     <input type="text" name="salaryto" id="salaryto" class="form-control" value="{{old('salaryto')}}">
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                   <label for="startdate">Closing Date*</label>
                   <input type="text" name="closingdate" id="closingdate" class="form-control" value="{{old('closingdate')}}" readonly="true">
                     @if(session()->get('warning'))
                     <span class="text-danger">
                        {{ session()->get('warning') }}  
                      </span>
                    @endif
                </div>
                <div class="col-md-6">
                  <label for="startdate">Candidate Count*</label>
                  <input type="text" name="candidatecount" id="candidatecount" class="form-control" value="{{old('candidatecount')}}">
                </div>
              </div>
              
             <div class="row">
               <div class="col-md-12">
                 <label for="">Description*</label>
                 <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{old('description')}}</textarea>
               </div>
             </div>
            </div>
          <button type="submit" class="btn btn-primary">Add Post</button>
      </form>
  </div>

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