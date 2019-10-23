@extends('layouts.admin')
@section('content')
<style>
	.head{
      padding-bottom: 20px;
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
        
        <a href="{{url('/career_yolax')}}" class="app-menu__item active"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career</span></a>
        </li>
          <li><a href="{{url('/contact_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact</span></a></li>
                  
        <li><a href="{{url('/post_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job Post</span></a></li>
        <li><a href="{{url('/sitevars_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Site Vars</span></a></li>
        
      </ul>
    </aside> 
<main class="app-content">
<div class="container">
   <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Career</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Career</a></li>
        </ul>
      </div>
      <div class="row">
        <ul class="nav">
          <li><button class="btn" type="submit" id="bulk_delete" name="bulk_delete">Delete</button></li>
            <li>
          <select class="sel_job_yolax" name="sel_job_yolax" id="sel_job_yolax">
            <option value="">Select Post</option>
            @foreach($job as $job_posts)
              <option value="{{$job_posts->id}}">{{$job_posts->job_title}}</option>
            @endforeach
          </select>
        </li>
        
        </ul>
      </div>
	
  <br>
  <br>
	<div class="card">
		<table class="table table-bordered table-striped"style="width: 100%; " id="career_y">
			<thead class="bg-dark" style="color: white">
				<tr>
				<th><input type="checkbox" id="selectall" name="selectall"></th>
       <th>Job Id</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Document</th>
        <th>Time</th>
			</tr>
			</thead>
			<tbody>
			@foreach($site_domain as $domain)
            <?php $domain = $domain->site_domain;  ?>
      @endforeach
			@foreach($data as $datas)
     <tr>
				<td><input type="checkbox" class="sub_chk" data-id="{{$datas->id}}"></td>
       
			     	<td>{{$datas->job_id}}</td>
                  <td>{{$datas->name}}</td>
                  <td>{{$datas->email}}</td>
                  <td>{{$datas->mobileno}}</td>
                  @if($datas->file == '')
                   <td>No file</td>
                    @else
                   <td>

                    <a href="{{ $domain.'/storage/document/'.$datas->file }}" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                    </td> 
                   @endif
                   <td>{{$datas->created_at}}</td> 
                 </tr>
                 @endforeach 
      			</tbody>

		</table>

	</div>
	
</div>
</main>
<script>

  $(document).ready(function() {
    $('#careertable').DataTable();


     $('#selectall').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });

     $('#bulk_delete').on('click', function(e) {


            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
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
                        url: '/DeleteAll_career_yolax',
                        type: 'GET',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            $('#career_y').html(data);
                              $(".sub_chk").prop('checked',false);
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
        
        $('#sel_job_yolax').on('change', function(){
           var job = $('#sel_job_yolax').val();
           $.ajax({
               url: '/search_career_yolax',
               type: 'GET',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {job_id:job},
               success: function (data) {
                       $('#career_y').html(data);
                    },
           });
       });
    });

     $(document).ready(function() {
          $('.sel_job_yolax').select2();
      });
</script>

@endsection