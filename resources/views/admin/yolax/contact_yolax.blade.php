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
        
        <a href="{{url('/career_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career</span></a>
        </li>
          <li><a href="{{url('/contact_yolax')}}" class="app-menu__item active"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact</span></a></li>
                  
        <li><a href="{{url('/post_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job Post</span></a></li>
        <li><a href="{{url('/sitevars_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Site Vars</span></a></li>
        
      </ul>
    </aside> 
<main class="app-content">
<div class="container">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Contact</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Contact</a></li>
        </ul>
      </div>
	<button class="btn btn-info" type="submit" id="bulk_delete_contact">Delete</button>
  <br><br>
	<div class="card" style="">
		<table class="table table-bordered table-responsive table-striped" id="contacttable_y" style="width: 100%;caption-side: top; ">
			<thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
				<tr style="">
				<th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact"></th>
				<th>Full Name</th>
        <th>Company Name</th>
        <th>Email</th>
        <th>Mobile No.</th>
        <th>Plant</th>
        <th>State</th>
        <th>Open Power</th>
        <th>Captive Power</th>
        <th>Capacity</th>
        <th>Power Consumption</th>
        <th>Steam</th>
        <th>Steam Consumption</th>
        <th>Production</th>
				<th>Message</th>
        <th>Time</th>
			</tr>
			</thead>
			<tbody>
				@foreach($data as $con)
			 <tr>
			 	<td><input type="checkbox" class="sub_chk_contact" data-id="{{$con->id}}"></td>
        <td>{{$con->name}}</td>
        <td>{{$con->company_name}}</td>
			 	<td>{{$con->email}}</td>
        <td>{{$con->mobile}}</td>
        <td>{{$con->plant}}</td>
        <td>{{$con->state_ect_brd}}</td>
        <td>{{$con->open_power}}</td>
			 	<td>{{$con->captive_power}}</td>
        <td>{{$con->capacity}}</td>
        <td>{{$con->power_consumption}}</td>
        <td>{{$con->steam}}</td>
        <td>{{$con->steam_consumption}}</td>
        <td>{{$con->production}}</td>
			 	<td>{{$con->message}}</td>
        <td>{{$con->created_at}}</td> 
			 </tr>
			 @endforeach
      		</tbody>

		</table>

	</div>
	
</div>
</main>
<script>

  $(document).ready(function() {
    $('#contacttable').DataTable();

    $('#selectall_contact').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk_contact").prop('checked', true);  
         } else {  
            $(".sub_chk_contact").prop('checked',false);  
         }  
        });


   $('#bulk_delete_contact').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk_contact:checked").each(function() {  

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

                        url: '/DeleteAll_contact_yolax',

                        type: 'GET',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {
                           
                           $('#contacttable_y').html(data);
                            $(".sub_chk_contact").prop('checked',false);
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