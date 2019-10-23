@extends('layouts.app') 
@section('title','Contact - Laxyo Energy Limited') 
@section('body')

<head>
	<title>Contact - Laxyo Energy Limited</title>
</head>

<section class="title_page bg_3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2>Contact</h2> 
				<nav id="breadcrumbs">
					<ul>
						<li><a href="{{url('/')}}">Home</a>
						</li>
						<li>Contact</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--End TITLE PAGE-->
<!-- Start Contact Page -->
<section class="content contact">
	<div class="container">
		
		@if (session('message'))
		<div class="alert alert-success">
		{{ session('message') }}
	    </div>
	    @endif
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="title_content">
					<h3>Let's keep in touch</h3>	
				</div>
				<p>Reach out to us and we'll respond as soon as possible.</p>
				<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>	<strong>Success!</strong> Your message has been sent to us.</div>
				<div class="alert alert-danger hidden" id="contactError">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>	<strong>Error!</strong>  <span class="errorMessage">There was an error sending your message.</span>
				</div>
				<form id="contactForm" action="{{ route('contact.store') }}" method="POST" class="jogjaContact">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<label>Your Name <span style="color: #F34D2C;">*</span>
							</label>
							<input id="name" name="name" class="form-control" maxlength="100" value="{{ old('name') }}" type="text">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<label>Your E-Mail <span style="color: #F34D2C;">*</span>
							</label>
							<input id="email" name="email" class="form-control" maxlength="100" value="{{ old('email') }}" type="email">@foreach($errors->get('email') as $error)	<span class="text-danger">{{$error}}</span>
							@endforeach</div>
					</div>
					<div class="row">
						 <div class="col-md-12 col-lg-12 col-sm-12">
							<label>Your Address <span style="color: #F34D2C;">*</span></label>
                             <input id="autocomplete"placeholder="Enter your address"onFocus="geolocate()"type="text" class="form-control" name="address"  value="{{ old('address') }}" />
                             @foreach($errors->get('address') as $error)	<span class="text-danger">{{$error}}</span>
							@endforeach

						</div>
					</div>

					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<label>Mobile No. <span style="color: #F34D2C;">*</span>
							</label>
							<input id="mobile" name="mobile" class="form-control" maxlength="100" value="{{ old('mobile') }}" type="text">
							@foreach($errors->get('mobile') as $error)	<span class="text-danger">{{$error}}</span>
							@endforeach</div>
					</div>
					<div class="row mrgb_20">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<label>Comments</label>
							<textarea id="message" name="message" rows="4" cols="51" maxlength="5000" type="text" placeholder="Comment..">{{old('message')}}</textarea>
							@foreach($errors->get('message') as $error)	<span class="text-danger">{{$error}}</span>
							@endforeach
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<p class="pull-right"><i style="color: #F34D2C;">* Mandatory To Be Submitted</i>
							</p>
						</div>
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
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-success" type="submit" id="">Send Details</button>
							<input type="reset" class="btn btn-danger" value="Clear" onclick="location.reload();">
						</div>
					</div>
				</form>
				<div class="row mrgb_20">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<label>map</label>
							<div id="map" style="width:100%;height:400px;"></div>
						</div>
					</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 well">
				<div class="widget_content" style="padding-top:15px">
					<div class="title_content">
						<h3>Regd. Off. - Ratlam</h3>
					</div>
					<ul class="widget_info_contact">
						<li> <i class="fa fa-map-marker"></i>
							<p>Laxyo Tower, 46/1 T.I.T. Road, Ratlam (MP) 457001</p>
						</li>
						<li><i class="fa fa-phone-square"></i>
							<p>+91-7412-232432</p>
						</li>
						<li><i class="fa fa-fax"></i>
							<p>+91-7412-232432</p>
						</li>
					</ul>
				</div>
				<div class="widget_content">
					<div class="title_content">
						<h3>Corp. Off. - Indore</h3>
					</div>
					<ul class="widget_info_contact">
						<li><i class="fa fa-map-marker"></i>
							<p>Laxyo House, Plot No.2, County Park, MR-5, Mahalaxmi Nagar, Indore (MP) 452010</p>
						</li>
						<li><i class="fa fa-phone-square"></i>
							<p>+91-731-4043798</p>
						</li>
						<li><i class="fa fa-envelope"></i>
							<p>info@laxyo.com</p>
						</li>
					</ul>
				</div>
				<div class="widget_content">
					<div class="title_content">
						<h3>Reg. Off. - Chittorgarh</h3>
					</div>
					<ul class="widget_info_contact">
						<li><i class="fa fa-map-marker"></i>
							<p>CF-5, Madhav Nagar, Chanderia, Dist. Chittorgarh, (Raj.) 312021</p>
						</li>
						<li><i class="fa fa-phone-square"></i>
							<p>+91-1474-256710</p>
						</li>
				</div>
				<div class="widget_content">
					<div class="title_content">
						<h3>Social Media</h3>
					</div>
					<ul class="widget_social">
						<li><a class="fb" href="https://www.facebook.com/laxyoGroup/" data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a class="twtr" href="https://twitter.com/LaxyoGroup" data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a class="linkedin" href="https://in.linkedin.com/in/laxyo-group-21242a118" data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--END ROW-->
	</div>
</section>

<script type="text/javascript">

    function initialize() {
    initMap();
    initAutocomplete();
  }

  var map, marker;

  function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {
          lat: 22.761908,
          lng: 75.913525
        },
        zoom: 18,
      });
    }


var placeSearch, autocomplete;
var componentForm = {
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
};
function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
    /**  {!HTMLInputElement} */
    (document.getElementById('autocomplete')), {
      types: ['geocode']
    });

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();
  

  // for (var component in componentForm) {
  //   document.getElementById(component).value = '';
  //   document.getElementById(component).disabled = false;
  // }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
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
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDetZ-1Oby185noSjECywdI124q75At-xo&signed_in=true&libraries=places&callback=initialize" async defer></script>

@endsection