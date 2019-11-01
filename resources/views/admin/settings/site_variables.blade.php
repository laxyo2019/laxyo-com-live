@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
  .navbar{
    margin-bottom: 50px;
  }
</style>
@include('partials.admin.sidebar')
<main class="app-content">
<div class="container">
 
  <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Add Location For Job</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Location</a></li>
        </ul>
      </div>


<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
  <table class="table table-striped table-bordered bg-light text-center" id="varstable">
    <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td>Var code</td>
          <td>Var Key</td>
          <td>Var Value</td>
          <td>Action</td>
        </tr>
    <tbody>
           @foreach($loc as $locs)
            <tr>
               <td>{{$locs->var_code}}</td>
               <td>{{$locs->var_key}}</td>
               <td>{{$locs->var_value}}</td>
               <td>
                 <a data-varcode="{{$locs->var_code}}" data-var-key="{{$locs->var_key}}" data-var-value="{{$locs->var_value}}" class="text-primary editapply"><span class="fa fa-edit fa-lg"></span></a>
               </td>
            </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
<div class="modal" id="edit_form">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
       <!-- Modal body -->
       <form action="" method="post" >
        <div class="modal-body">
              <input type="text" id="var_code" name="var_code" class="form-control" readonly><br>
              <input type="text" id="var_key" class="form-control" name="var_key" readonly><br>
              <input type="text" id="var_value" class="form-control" name="var_value">
              
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           <button type="button" class="btn btn-primary editbtn">Edit</button>&nbsp;&nbsp;<button class="btn btn-danger Close" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</main>
<script>
     $(document).ready(function(){
       $('.editapply').on('click', function () {
       
          $('#edit_form').modal('toggle');
          var varcode = $(this).attr('data-varcode');
          var datavarkey = $(this).attr('data-var-key');
          var datavarvalue = $(this).attr('data-var-value');
          $('#var_code').val(varcode);
          $('#var_key').val(datavarkey);
          $('#var_value').val(datavarvalue);
        });
        

        // edit here

         
        $('.editbtn').on('click', function(){

         var var_code = $('#var_code').val();
         var var_key = $('#var_key').val();
         var var_value = $('#var_value').val();
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });
          $.ajax({
                url:'admin_sitevars',
                type: 'post',
                data:{var_code:var_code,var_key:var_key,var_value:var_value},
                success: function(data){
                  $('#varstable').html(data);
                }

          });
        });
        $('.Close').on('click', function(){

           location.reload(true);
        });
      });
</script>
@endsection
