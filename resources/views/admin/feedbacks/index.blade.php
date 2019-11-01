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
          <h1><i class="fa fa-location"></i>Feedback</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Feedback</a></li>
        </ul>
      </div>
      <button class="btn btn-info" type="submit" id="bulk_delete_contact">Delete</button>
  <br><br>
	<div class="card">
		<table class="table table-bordered table-striped" id="feedbacktable">
			<thead class="bg-dark" style="color: white;text-align: center;">
				<tr style="width: 100%;">
				<th style="width: 5%;"><input type="checkbox" id="selectall_feedback" name="selectall_feedback"></th>
				<th style="width: 15%;">Name</th>
				<th style="width: 15%;">Email</th>
				<th style="width: 10%;">Mobile Number</th>
				<th style="width: 15%;">Subject</th>
				<th style="width: 30%;">Message</th>
        <th>Time</th>
				<th style="width: 10%;">Action</th>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $datas)
			<tr>
				<td><input type="checkbox" class="sub_chk_feedback" data-id="{{$datas->id}}"></td>
                  
                  <td>{{$datas->name}}</td>
                  <td>{{$datas->email}}</td>
                  <td>{{$datas->phone2}}</td>
                  <td>{{$datas->subject}}</td>
                  <td>{{$datas->message}}</td>
                  <td>{{$datas->created_at}}</td>
                  <td>
                   
                <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $datas->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-{{ $datas->id }}" action="{{ route('fdel', ['id' => $datas->id ]) }}" method="POST" style="display: none;">
                      @csrf
                      @method('delete')
                  </form>
                  </td>
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
    $('#feedbacktable').DataTable();
  
  $('#selectall_feedback').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk_feedback").prop('checked', true);  
         } else {  
            $(".sub_chk_feedback").prop('checked',false);  
         }  
        });


   $('#bulk_delete_contact').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk_feedback:checked").each(function() {  

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

                        url: '/DeleteAll_feedback',

                        type: 'GET',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {
                           
                           $('#feedbacktable').html(data);
                            $(".sub_chk_feedback").prop('checked',false);
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