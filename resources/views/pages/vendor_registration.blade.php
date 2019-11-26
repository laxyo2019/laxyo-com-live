@extends('layouts.app')
@section('title','Vendor Registration - Laxyo Energy Limited')

<!--Start TITLE PAGE-->		
@section('body')
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Vendor Registration</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Vendor Registration</li>							
</ul>						
</nav>	

</div>				
</div>	

</div>		
</section>		
<!--End TITLE PAGE-->				
<section class="content sb_right">			
<div class="container">				
<div class="row">				
	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
		<div class="intro_box">
			<h1>Vendor <span>Registration</span></h1>			
		</div>
	</div>
	
	<div class="col">
		@if(session()->get('success'))
    		<div class="alert alert-success">
    			{{ session()->get('success') }}  
    		</div><br />
  		@endif
  	</div>
</div>
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Success!</strong> Your message has been sent to us.
	</div>
	<div class="alert alert-danger hidden" id="contactError">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Error!</strong> <span class="errorMessage">There was an error sending your message.</span>
	</div>
   @if(session('vender_message'))
   <div class="alert alert-success">
        {{ session('vender_message') }}
    </div>
   @endif
	<form id="vendorform" action="{{url('/vendor-registration')}}" method="POST" enctype="multipart/form-data" class="jogjaContact">
			{{csrf_field()}}
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Company Name <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="cname" name="company_name" class="form-control" maxlength="100" value="{{old('company_name')}}" placeholder="Company Name" type="text">
						@foreach($errors->get('company_name') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="col-md-3 col-lg-3 col-sm-12">
							<label class="marr">Contact Person Name <span style="color: #F34D2C;">*</span></label>
						</div>
						<div class="col-md-9 col-lg-9 col-sm-12">
							<input id="cpname" name="person_name" class="form-control" maxlength="100"  value="{{old('person_name')}}" placeholder="Contact Person Name" type="text" >
							@foreach($errors->get('person_name') as $error)
						    <p class="text-danger">{{$error}}</p>
						     @endforeach
						</div>
					</div>
			</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Designation <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="designation" name="designation" class="form-control" maxlength="100"  value="{{old('designation')}}" placeholder="Designation" type="text">
						@foreach($errors->get('designation') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Email <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="email" name="email" class="form-control" maxlength="100"  value="{{old('email')}}" placeholder="Email" type="email">
						@foreach($errors->get('email') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Postal Address <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="paddress" name="postal_address" class="form-control" maxlength="100" onFocus="geolocate()"  value="{{old('postal_address')}}" placeholder="Postal Address" type="text">
						@foreach($errors->get('postal_address') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Telephone No. <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="telephone" name="telephone_no" class="form-control" maxlength="100"  value="{{old('telephone_no')}}" placeholder="Telephone No. (with area code)" type="text">
						@foreach($errors->get('telephone_no') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Mobile No. <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="mobile" name="mobile_no" class="form-control" maxlength="100"  value="{{old('mobile_no')}}" placeholder="Mobile No." type="text">
						@foreach($errors->get('mobile_no') as $error)
					    <p class="text-danger">{{$error}}</p>
					     @endforeach
					</div>
				</div>
		</div>
{{-- 	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="col-md-3 col-lg-3 col-sm-12">
					<label class="marr">Nature Of Business <span style="color: #F34D2C;">*</span>
					</label>
				</div>
				<div class="col-md-9 col-lg-9 col-sm-12">
				<select name="nature_business" class="form-control select-cont" value="">
					<option value="0">select</option>
					@foreach($users as $user)
					   @if($user->site_code == '001' && $user->tag == 'bussiness_nature')
                       <option value="{{$user->title}}">{{$user->title}}</option>
                       @endif
					@endforeach
	             </select>
		         @error('nature_business')
                 <p class="text-danger">{{ $message }}</p>
                  @enderror
		        	
				</div>
			</div>
		</div> --}}

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Products <span style="color: #F34D2C;">*</span></label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input type="text" name="products" id="products" class="form-control" value="{{old('products')}}" placeholder="Enter Products">
				        @error('products')
                         <p class="text-danger">{{ $message }}</p>
                          @enderror
					</div>
				</div>
		</div>
       <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">PAN #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="pan" name="pan" class="form-control" maxlength="100" value="{{old('pan')}}" placeholder="PAN" type="text">
					</div>
				</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">GST#</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="gst" name="gst" class="form-control" maxlength="100" value="{{old('gst')}}" placeholder="GST" type="text">
					</div>
				</div>
		</div>

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-md-3 col-lg-3 col-sm-12">
						<label class="marr">Upload Brochure #</label>
					</div>
					<div class="col-md-9 col-lg-9 col-sm-12">
						<input id="file_path" name="file_path" value="{{old('file_path')}}" type="file" class="form-control">
					</div>
				</div>
		</div>
        
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<p class="pull-right"><i style="color: #F34D2C;">* Mandatory To Be Submitted</i></p>
			</div>
		</div>
         <div class="row">
					          <div class="col-md-4">
					             <div class="captcha">
					               <span>{!! captcha_img('math')!!}</span>
					              
					               </div>
					            </div>
				        </div>
					<div class="row">
				            <div class="col-md-8">
				             <div class="col-md-6">
				             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" autocomplete="off">
                             </div>
                             <div class="col-md-6">
                             	@if ($errors->has('captcha'))
								    <div class="error text-danger">{{ $errors->first('captcha') }}</div>
								@endif
                             </div>

				         </div>
                   </div>
		<div class="row">
			<div class="col-md-12">
				<input data-loading-text="Loading..." class="btn btn-primary" value="Send Message" type="submit" name="submit">
				<input onclick="document.getElementById('vendorform').reset(); document.getElementById('venderfrom').value = null; return false;" class="btn btn-danger" value="Clear" type="reset">
			</div>
		</div>
	</form>
</div>

<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
</div> 
<!--END ROW-->
</div>
</section>	

<script>

	var placeSearch, autocomplete;

var componentForm = {
  
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('paddress'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDetZ-1Oby185noSjECywdI124q75At-xo&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
@endsection