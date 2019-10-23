@extends('layouts.app')

@section('title', 'Railway Contractors, Track Laying & Linking, Private Railway Siding Maintenance &amp; Railway Construction')

@section('meta')
  <meta name="description" content="Laxyo energy group is India based approved railway contractors ,o&m service providers working efficiently on railway track laying and linking, railway contractors, railway track laying and railway construction company"/>    
  <meta name="keywords" content="private railway siding maintenance company, railway construction company, railway track laying, railway contractors, railway signaling contractors, railway track linking, laying and linking, railway contractors India, railway signaling, private siding railway signalling, railway track S & T Contractors, signaling contractors, railway signaling. "/>  
@endsection

@section('body')
<!--Start TITLE PAGE-->		
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Railway Contractors</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('services')}}">Services</a></li>														
<li>Railway Projects</li>							
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
  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <!--  Page slider start here-->
    <div id="owl-slider" class="owl-carousel owl-theme pb_30">
      <!--<div class="item"><img src="img/railway/track-laying.jpg"></div>
      <div class="item"><img src="img/railway/track-switch.jpg"></div>
      <div class="item"><img src="img/railway/track-maintenance.jpg"></div>-->
      <div class="item"><img src="{{asset('img/railway/railway-contractors-01.jpg')}}" alt="railway contractors"></div>
      <div class="item"><img src="{{asset('img/railway/railway-contractors-02.jpg')}}" alt="railway contractors"></div>
      <div class="item"><img src="{{asset('img/railway/railway-contractors-03.jpg')}}" alt="railway contractors"></div>
      <div class="item"><img src="{{asset('img/railway/railway-contractors-04.jpg')}}" alt="railway contractors"></div>
      <div class="item"><img src="{{asset('img/railway/railway-contractors-05.jpg')}}" alt="railway contractors"></div>
      <div class="item"><img src="{{asset('img/railway/railway-contractors-06.jpg')}}" alt="railway contractors"></div> 
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          autoPlay: 7000, //Set AutoPlay to 7 seconds
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
          pagination: false,
        }); 
      });
    </script>
  <!--  Page slider end here-->
    <div class="title_content">             
      <h3>Railway Service Contractors India</h3>            
    </div> 
    <div class="sub_content">
      <p>Laxyo group is one of the former and finest India based railway service contractors. Till the date we completed various projects for railway services included with eastern, southern, frontier railways. Our group has created a prestigious position by delivering quality terms and best competitive work through outstanding project management skills for Indian Rail Service. Offering complete end to end railway services.</p>

      <blockquote class="default"> 
        <p>Our major services for railway is included with taking over all railways contracts related to operation, maintenance, improving railways track laying etc.</p>
      </blockquote>

      <p>With our accomplished railway work we are concentrating and largely working on: </p>

      <p><b><a href="{{url('railway_contractors')}}">Railways track laying</a> services</b>, we avails right track formation , concerns to drainage, preparation of land, ballast process, sleepers made with concrete, offloading of rails, tamping, and finishing work. Complete new track formation. Gauge conversion for railways, earth works which are integral part of complete railway services. Railway track laying operation and maintenance requires efficient persons and machineries. We help you with efficient methodology and work accuracy. </p>

      <p><b>Railways construction projects</b> as of platforms, sheds, railway siding, electrifications, signalling, telecommunications, pavements road works. Supply required materials for P way, overhead electrification materials etc. </p>

      <p><b>New railways contracts</b> for renovations and construction services for bridge sleepers, Rails etc. New contracts for restructuring /up gradation for railway yards, platforms and sidings etc. </p>

      <p><b>Regular maintenance</b> of railway tracks and operations - including deep screening, complete track renewals (CTR) work, De-stressing for LWR, T.S.R. etc. </p>

      <p><b>Detailed engineering work</b>, included with process of equipments rotating, instrumentations, electrical facilities, piping, civil works, and pressure vessels, commissionaires. </p>

      <p><b>Preliminary engineering</b> where we performs surveys for site, detailed research based on topography, local factors. Making provision for bridges, freight corridors, railway crossing, railway siding and all relevant works the respective functions. </p>

      <p><b>Track and rail maintenance:</b> After understanding complete track geometry, takes over railways maintenance work based on annual, monthly basis for <b>railway siding, bridging, track renewal</b> etc. Our track renewal process is involved with <b>De stressing of LWR, turnout renewal, realignment of curve insertion of diamond crossing, welding of railway joints, manual deep screening.</b></p>

      <p><b>Operation and maintenance (O&amp;M)</b> work for Indian railway services. </p>

      <p><b>Material supply</b> for P way, overhead electrification materials etc. </p>

      <p>We are very active and updated with all latest market progress, thus we gives the best solution to all <a href="{{url('railway_contractors')}}">railway projects</a>. Full of strength, capacity, proper management system and quality to offer work done with speed.</p>

    </div>
    <section>
      <div class="row">
        <div class="title_content">             
            <h3>Major Achievement</h3>            
          </div>            
          <div class="infrastructure">
            <strong>32 kms of Railway Track laid in 40 Days in the rough working environment</strong> 
            <blockquote class="default"> 
              <p>LAXYO backed by its technical and project management skills was able to create history in completing the project of laying 32 Kms of railway track in North Western Railway Jodhpur Zone in the state of Rajasthan (India). The engineers at Laxyo used all its Logistics skills, Inventory Management and HR skill to handle labors on the construction site. Laxyo has been in the field of erection and commission projects from four decade, this enabled us to complete the project from inception to implement in the rough working condition prevailing in the desert environment.</p>
            </blockquote>
            <p>Laxyo is thankful to all its engineers and team members who worked 24/7 just to complete the project in record time.</p>        
          </div>  
      </div>
    </section>  
    </div>
    <!--Sidebar Widget-->
    <div class="col-sm-3 col-md-3 col-lg-3">
      @include('partials.sidebar')
    </div>
  </div>
</div> 
<!--END ROW-->
</div>
</section> 
@endsection