@extends('layouts.admin')
@section('content')
<style>
	.head{
      padding-bottom: 20px;
	}
</style>
@include('partials.admin.sidebar')
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
		<table class="table table-bordered table-striped" id="contacttable" style="width: 100%;caption-side: top; ">
			<thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
				<tr style="">
				<th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact"></th>
       
				<th>name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Message</th>
        <th>Time</th>
      <th>Action</th>
			</tr>
			</thead>
			<tbody>
				@foreach($data as $con)
			 <tr>
			 	<td><input type="checkbox" class="sub_chk_contact" data-id="{{$con->id}}"></td>
        <td>{{$con->name}}</td>
			 	<td>{{$con->email}}</td>
			 	<td>{{$con->address}}</td>
			 	<td>{{$con->mobile}}</td>
			 	<td>{{$con->message}}</td>
        <td>{{$con->created_at}}</td>
      
			 	<td>
        <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
        document.getElementById('delete-form-{{ $con->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

        <form id="delete-form-{{ $con->id }}" action="{{ route('contactdel', ['id' => $con->id ]) }}" method="POST" style="display: none;">
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

                        url: '/DeleteAll_contact',

                        type: 'GET',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {
                           
                           $('#contacttable').html(data);
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