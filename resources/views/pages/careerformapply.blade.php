@extends('layouts.app')
@section('title','Career Form For Apply - Laxyo Energy Limited')

	
<style>

</style>
<!--Start TITLE PAGE-->	
@section('body')	
<section class="title_page bg_3">			
<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Career</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Career</li>							
</ul>						
</nav>					
</div>				
</div>			
</div>		
</section>		
<!--End TITLE PAGE-->				
		
<div class="container">				
<div class="row">					
	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
		<div class="intro_box">
			<h1>Career <span>With Us</span></h1>
		</div>
	</div>
</div>


	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		
		<div class="row">
      <div class="col-md-12 col-sm-12">
            <a href="{{url('/career')}}" style="font-size: 20px;">back</a>
            <hr>
      </div>
			 <div class="col-md-12">
		
			 <form id="careerform" action="{{ action('CareerController@submit') }}" method="post" class="form" enctype="multipart/form-data">
      	     <div class="card form-group">
      	     @csrf
      	     <div class="card-header bg-primary">
      	     	Career Apply Form
      	     </div>
      	     <div class="card-body">
              		 
		      	      <input type="hidden" id="job_id" class="form-control" name="job_id" value="{{$post->id}}">
		             
                     <div class="row">
             			<div class="col-md-6">
                        <input class="form-control" name="name" placeholder="Your Full Name (**Mandatory)" type="text" value="{{old('name')}}" required="required">
	                    @if ($errors->has('name'))
						    <div class="error text-danger">{{ $errors->first('name') }}</div>
						@endif
	                    </div>

	                    <div class="col-md-6">
	                        <input class="form-control" name="email" placeholder="Your Email (**Mandatory)" type="text" required="required" value="{{old('email')}}">
	                        @if ($errors->has('email'))
						    <div class="error text-danger">{{ $errors->first('email') }}</div>
						@endif
                    	</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" maxlength="10"  name="mobileno" placeholder="Your Mobile Number (**Mandatory)" type="text" required="required" value="{{old('mobileno')}}">
                                @if ($errors->has('mobileno'))
								    <div class="error text-danger">{{ $errors->first('mobileno') }}</div>
								@endif
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" id="careeraddress" name="address" placeholder="Your Address" onFocus="geolocate()" type="text" value="{{old('address')}}">
                            </div>
                        </div>
                        
                    	<textarea class="form-control" rows="6" name="about" placeholder="Tell Us Amazing about You...">{{old('about')}}</textarea>
                    
                         <div class="row">
                         @if($post->resume_req == '1')
                                 <div class="col-md-12">
			                        <div class="form-group">
			                            <label for="exampleInputFile">Attached Resume Here</label>
			                            <input id="file" name="file" type="file">
			                            <p class="help-block">Attach .doc, .pdf files only (Min of 3MB)</p>
			                        </div>
			                        </div>
			                 
    			              @else
    			               
    			                 	<div class="col-md-12">
    			                 		Not Need
    			                 	</div>
			                
			                   @endif
			              </div>
			              <div class="row">
					          <div class="col-md-4">
					             <div class="captcha">
					               <span>{!! captcha_img('flat')!!}</span>
					              
					               </div>
					            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-8">
				             <div class="col-md-6">
				             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                             </div>
                             <div class="col-md-6">
                             	@if ($errors->has('captcha'))
								    <div class="error text-danger">{{ $errors->first('captcha') }}</div>
								@endif
                             </div>

				         </div>
				          </div>
                        <br>

			        </div>
			            
			        <div class="card-footer">
			        	<button type="submit" class="btn btn-primary">Send Details</button>
			        	<button type="reset" id="clear" class="btn btn-danger" onclick="location.reload();">Clear</button>
			        </div> 
      	     </div>	
      	    
      	     </form>
      	     
      	    </div>
		</div>
        
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>
<script>

$('#clear').click(function(){
   $('#careerform')[0].reset();
});

// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('careeraddress'), {types: ['geocode']});

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