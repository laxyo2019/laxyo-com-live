
@extends('layouts.admin')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
@include('partials.admin.sidebar')
<main class="app-content">
<div class="container">
  
<div class="row">
  @if ($errors->any())
     @foreach ($errors->all() as $error)
         <p>{{$error}}</p>
     @endforeach
 @endif
</div> 
<div class="row pull-right"> 
<a href="{{route('admin.jobs.index')}}" class="btn btn-success">Back</a>
</div>
<div class="row">
  <div class="col-md-12">
  
<div class="card uper">
  <div class="card-header bg-dark" style="color: white">
    <h1>Add Job</h1>
  </div>
  <div class="card-body">
      <form method="post" action="{{route('admin.jobs.store')}}">
          <div class="form-group">
             {{@csrf_field()}}
             <div class="row">
                 <div class="col-md-6">
                   <label for="postname">Job Title*</label>
                   <input type="text" name="jobtitle" id="jobtitle" class="form-control"value="{{old('jobtitle')}}">
                  </div>
                  <div class="col-md-6">
                   <label for="location">Location*</label>
                   <input type="text" name="location" id="location" class="form-control"value="{{old('location')}}">
                  </div>
               
             </div>
              <div class="row">
                <div class="col-md-6">
                    <label for="min_exp">Minimum Experiece</label>
                     <input type="text" name="min_exp" id="min_exp" class="form-control" value="">
                </div>
                <div class="col-md-6">
                    <label for="max_exp">Maximum Experience</label>
                     <input type="text" name="max_exp" id="max_exp" class="form-control" value="">
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
                   <label for="opendate">Opening Date*</label>
                   <input type="text" name="opendate" id="opendate" class="form-control" value="{{old('opendate')}}" readonly="true">
                     @if(session()->get('warning'))
                     <span class="text-danger">
                        {{ session()->get('warning') }}  
                      </span>
                    @endif
                </div>
                <div class="col-md-6">
                   <label for="closingdate">Closing Date*</label>
                   <input type="text" name="closingdate" id="closingdate" class="form-control" value="{{old('closingdate')}}" readonly="true">
                     @if(session()->get('warning'))
                     <span class="text-danger">
                        {{ session()->get('warning') }}  
                      </span>
                    @endif
                </div>
                <div class="col-md-6">
                  <label for="candidatecount">Candidate Count*</label>
                  <input type="text" name="candidatecount" id="candidatecount" class="form-control" value="{{old('candidatecount')}}">
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
               <div class="col-md-12">
                 <label for="">Description*</label>
                 <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{old('description')}}</textarea>
               </div>
             </div>
            </div>
          <button type="submit" class="btn btn-primary">Post Job</button>
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

     $("#opendate").datepicker({
        dateFormat: "dd-mm-yy",
        minDate: 0
     });

     $('#opendate').on('keypress', function(){
        $('#opendate').attr('readonly', true);
     });
     
   });
   
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection