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
          <h1><i class="fa fa-location"></i>Vender Data</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Vender</a></li>
        </ul>
      </div>
   <button class=" btn btn-info" type="submit" id="bulk_delete_vender" name="bulk_delete">Delete</button>
   <br><br>
	<div class="card">
		<table class="table table-responsive table-bordered table-striped" style="width: 100%;caption-side: top; " id="vendertable">
			<thead class="bg-dark" style="color: white;text-align: center;">
				<tr>
				<th><input type="checkbox" id="selectallvender"></th>
				<th >Company Name</th>
				<th >Contact Person Name</th>
				<th >Designation</th>
				<th >Email</th>
				<th >Postal Address</th>
				<th >Telephone No.</th>
				<th >Mobile No.</th>
				<th >Nature Of Business</th>
				<th >Products</th>
				<th >PAN</th>
				<th >GST</th>
				<th>File Download</th>
        <th>Time</th>
        <th >Action</th>
			</tr>
			</thead>
			     
			<tbody>
        @foreach($site_domain as $domain)
            <?php $domain = $domain->site_domain;  ?>
        @endforeach
				@foreach($data as $vender)
				<tr>
					<td><input type="checkbox" class="sub_chk_vender" data-id="{{$vender->id}}"></td>
					<td>{{$vender->company_name}}</td>
					<td>{{$vender->person_name}}</td>
					<td>{{$vender->designation}}</td>
					<td>{{$vender->email}}</td>
					<td>{{$vender->postal_address}}</td>
					<td>{{$vender->telephone_no}}</td>
					<td>{{$vender->mobile_no}}</td>
					<td>{{$vender->nature_business}}</td>
					<td>{{$vender->products}}</td>
					<td>{{$vender->pan}}</td>
					<td>{{$vender->gst}}</td>

					@if($vender->file == '')
					   <td>No file</td>
					@else
					   <td>
                  	 <a href="{{$domain.'/storage/brochure/'.$vender->file}}" target="_blank"><span class="fa fa-download fa-lg"></span></a>
             </td> 
            @endif
          <td>{{$vender->created_at}}</td>
					<td>
						<a href="#" class="btn text-danger " onclick="event.preventDefault(); if(confirm('Are you sure?')){
		                  document.getElementById('delete-form-{{ $vender->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

		                  <form id="delete-form-{{ $vender->id }}" action="{{ route('venderdel', ['id' => $vender->id ]) }}" method="POST" style="display: none;">
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
    $('#vendertable').DataTable();


      $('#selectallvender').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk_vender").prop('checked', true);  
         } else {  
            $(".sub_chk_vender").prop('checked',false);  
         }  
        });
     $('#bulk_delete_vender').on('click', function(e) {


            var allVals = [];  
            $(".sub_chk_vender:checked").each(function() {  
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
                        url: '/DeleteAll_vender',
                        type: 'GET',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            $('#vendertable').html(data);
                            $(".sub_chk_vender").prop('checked',false);
                         },
                        
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