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
  <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Job Post</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Job Post  </a></li>
        </ul>
      </div>

<div class="row">
  <div class="col-md-12"  >
    <button class="btn btn-info" type="submit" id="bulk_delete_post">Delete</button>
    <a href="{{route('admin-post.create')}}" class="btn btn-primary" style="float: right">Add New Post</a>
  </div>
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
  <table class="table table-bordered table-responsive bg-light text-center" id="posttable" style="caption-side: top">
    <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td style="width: 5%"> <input type="checkbox" id="selectall_post" name="selectall_post"></td>
          <td style="width: 10%">Job Title</td>
          <td style="width: 10%">Location</td>
          <td style="width: 10%">Experience</td>
          <td style="width: 20%">Description</td>
          <td style="width: 5%">Resume Necessary</td>
          <td style="width: 20%" colspan="2">Salary Range</td>
          <td style="width: 5%">Closing Date</td>
          <td style="width: 5%">Candidate Count</td>
          <td>Active</td>
          <td style="width: 10%">Action</td>
        </tr>
        <tr>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 20%"></td>
          <td style="width: 5%"></td>
          <td style="width: 10%">From</td>
          <td style="width: 10%">To</td>
          <td style="width: 5%"></td>
          <td></td>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
        </tr>
    </thead>
    <tbody>
           @foreach($post as $posts)
            <tr>
             <td><input type="checkbox" class="sub_chk_post" data-id="{{$posts->id}}"></td>
             <td>{{$posts->job_title}}</td>
             <td>{{$posts->job_location}}</td> 
             <td>{{$posts->exp}}</td>
             <td><?php echo $posts->job_desc ?></td>
             <td>{{$posts->resume_req}}</td>
             <td>{{$posts->sal_min}}</td>
             <td>{{$posts->sal_max}}</td>
             <td>{{$posts->close_dt}}</td>
             <td>{{$posts->cand_count}}</td> 
             @if($posts ->active == 1)
                <td>True</td>
             @else
                 <td>False</td>
             @endif       
             <td>
               <a href="admin-post/{{$posts->id}}/edit" class="text-primary"><span class="fa fa-edit fa-lg"></span></a>
                <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $posts->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-{{ $posts->id }}" action="{{ route('admin-post.destroy', $posts->id) }}" method="POST" style="display: none;">
                      @csrf
                      @method('delete')
                  </form>

             </td>

            </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
  </main>
<script>

  $(document).ready(function() {
    $('#posttable').DataTable();

   $('#selectall_post').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk_post").prop('checked', true);  
         } else {  
            $(".sub_chk_post").prop('checked',false);  
         }  
        });


   $('#bulk_delete_post').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk_post:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: '/DeleteAll_post',

                        type: 'GET',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {
                           
                           $('#posttable').html(data);
                            $(".sub_chk_post").prop('checked',false);
                       },

                        error: function (data) {

                            alert(data.responseText);
                            
                        }

                    });


                  $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();

                  });

                }  

            }  

        });






   });

</script>
@endsection