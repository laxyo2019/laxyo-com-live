@extends('layouts.app')

@section('title', 'P Way Material Supplier | Railway Fitting, Turnout, Signaling and Telecom Material Supplier')

@section('meta')
  <meta name="description" content= "Backed by sound industry experience and sophisticated infrastructure facility, we are the leading P Way Material Supplier,Turnout Supplier, Signaling and Telecom Material Supplier."/>    
  <meta name="keywords" content="P Way material Supplier, P Way fitting Supplier, Turnout supplier, Signaling and telecom material supplier "/>
@endsection

@section('body')

<!--Start TITLE PAGE-->		
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>P Way Material Supplier</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('services')}}">Services</a></li>														
<li>P Way Material Supplier</li>							
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
      <div class="item"><img src="{{asset('img/pway/pway singnaling and turnout.jpg')}}" alt="pway singnaling and turnout"></div>
      <div class="item"><img src="{{asset('img/pway/pway singnaling and turnout.jpg')}}" alt="pway singnaling and turnout"></div> 
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
      <h3>P Way Material Supplier</h3>            
    </div> 
    <div class="sub_content">
      <p>We are amongst the prominent organizations engaged in supplying P Way material with a wide range of track fittings P Way tools. We are procuring all the raw-material and other allied material from some of the selected vendors who are certified and trustworthy. Our range includes Fish Bolts and Nuts, Railway Screw, Dip Lorry, Push Trolley, Lifting Barrier Gate, Ground Lever Frame, Pull Rod, Push Rod, Rail Cutting Machine.

        Backed by sound industry experience and sophisticated infrastructure facility, we have consistently had the option to fulfill the customers in the most ideal way. Our sophisticated infrastructure facility enables us in executing all our business operations in an streamlined and efficient manner. Further, to deal with every one of our exercises appropriately, we have procured a group of constant experts. Owing to the sound infrastructure facility, diligent team of professionals and qualitative products, we have been able to muster a huge clientele for ourselves.</p>

      <div class="widget_content info">
        <p><b>Turnout Supplier :</b></p>
        <p>With the help of a proficient team of expert personnel, We supply Rail Turnouts which is used for enabling the shifting mechanism in railway tracks. The Railway Turnout offered by its availability in the market at industry leading price. This product is deliberately produced in accordance to the set mechanical standard and plan. Also, featured with reasonable weight and low maintenance this range of products is hugely sought in the market. Our firm is a regular supplier of all types of railway track materials includes points and crossings to the private or public sector units in India. </p>
        </div>

      <div class="widget_content info">
        <p><b>Signaling and Telecom Material Supplier :</b></p>
        <p>We provide class one and short line rail lines with railroad signal establishment, support, shaft line expulsion, material supply, the board, procurement, training and supervision. Our field crews are experienced and knowledgeable, some having previously worked in the signaling departments of railroads. Our goal is to provide excellent services utilizing the most cost effective practices to meet our customer’s needs and complete our jobs on budget and ahead of schedule. We understand there is no space for blunder with regards to railroad wellbeing and are glad for our ideal security record.</p>
        </div>

    </div>
   
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