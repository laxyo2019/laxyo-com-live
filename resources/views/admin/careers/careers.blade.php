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
          <h1><i class="fa fa-location"></i>Career</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Career</a></li>
        </ul>
  </div>
      <div class="col-md-12" >
      <ul class="nav" style="margin-bottom: 10px; ">
        <li id="top_btn"><input class="btn btn-info" type="submit" id="bulk_delete" name="bulk_delete" value="Delete" readonly></li>&nbsp;
        <li>
          <select class="sel_job" name="sel_job" id="sel_job">
            <option value="">Select Post</option>
            @foreach($job as $job_posts)
              <option value="{{$job_posts->id}}">{{$job_posts->job_title}}</option>
            @endforeach
          </select>
        </li>
        

      </ul>
    </div>
	<div class="card">
		<table class="table table-bordered table-striped"style="width: 100%;caption-side: top; " id="careertable">
			<thead class="bg-dark" style="color: white">
				<tr>
				<th><input type="checkbox" id="selectall" name="selectall"></th>
        
				<th>Job Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Address</th>
				<th>Summary</th>
				<th>Document</th>
        <th>Time</th>
				<th>Action</th>
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
                  <td>{{$datas->address}}</td>
                  <td>{{$datas->about}}</td>
                  @if($datas->file == '')
                       <td>No file</td>
                  @else     
                  <td>
                     <a href="{{$domain.'/storage/document/'.$datas->file}}" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                  </td>
                  @endif
                  <td>{{$datas->created_at}}</td>
                  <td style="text-align: center">
                 
                 <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $datas->id}}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-{{ $datas->id}}" action="{{ route('cdel', ['id' => $datas->id ]) }}" method="POST" style="display: none;">
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
                        url: '/DeleteAllitems',
                        type: 'GET',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            $('#careertable').html(data);
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
       

       $('#sel_job').on('change', function(){
           var job = $('#sel_job').val();
           $.ajax({
               url: '/search_career',
               type: 'GET',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {job_id:job},
               success: function (data) {
                       $('#careertable').html(data);
                    },
           });
       });



    });
  



  // In your Javascript (external .js resource or <script> tag)
      $(document).ready(function() {
          $('.sel_job').select2();
      });
</script>

@endsection