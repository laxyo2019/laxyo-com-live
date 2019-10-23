@extends('layouts.app')
@section('title','Construction Equipments on Rental Basis Offered by Laxyo Group of Energy.')
@section('meta')  
  <meta name="description" content= "Laxyo Group of energy is providing range of Construction equipments - earthmoving equipment, concrete equipment, road construction equipment, material preparation etc on rental basis."/>    
  <meta name="keywords" content="Earthmoving Equipment, Concrete Equipment ,Material Handling Equipment, Road Construction Equipment,Tunneling and Drilling ,dumper, articulated haulers, pavers, boring equipment, concrete pumps, Construction equipment rental services"/>
@endsection

<!--Start TITLE PAGE-->		
@section('body')
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Construction Equipment Rental Services</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('/services')}}">Services</a></li>														
<li>Construction Equipment Rental Services</li>							
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
      <div class="item"><img src="{{asset('img/rental/rental-services.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/rental/rental-services.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/rental/rental-services.jpg')}}"></div>
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
        <h3>Rental Services Earthmoving Equipment in India</h3>            
      </div> 
      <div class="sub_content">
        <p>Laxyo Energy Ltd. is aiming to be India's largest service providing company in renting/leasing of <a href="construction-equipment-rental-services.php">Construction equipments</a>, specialized in various class of machinery.</p>

        <p>We provides a unique rental proposition - an alternative to "buy". With our strong equipment strength &amp; highly qualified professional team we cater to various industry verticals like constructions, civil work, mechanical, electrical and instrumentation engineering.</p>

        <p>We have inventory in construction equipment, machinery, tools, and supplies, including: <a href="construction-equipment-rental-services.php">Earthmoving Equipment</a>, Concrete Equipment, Material Handling Equipment, Road Construction Equipment and much more. We provide construction equipment on rent at cost effective prices for a flexible length of time. These equipments are widely used for different kinds of building construction and repair.</p>

        <blockquote class="default">
          <p>You'll get all types of Equipment as according to your need within period of 7 days..So Hurry Up</p>
        </blockquote>

        <p><b>Keywords:</b> Earthmovers machinary for rental, Rental services provider in India, Rental services in India</p>
        
        <div class="pb_30"></div>

        <div class="title_content">
          <h3>Laxyo Construction Equipment Product Range</h3>
        </div>

        <div class="widget_content info">
          <p><b>Earthmoving Equipment</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Backhoe Loaders</li>
              <li><i class="fa fa-check-square"></i> Excavators</li>
              <li><i class="fa fa-check-square"></i> Loaders</li>
              <li><i class="fa fa-check-square"></i> Bulldozers</li>
              <li><i class="fa fa-check-square"></i> Skid-steer Loaders</li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Wheeled Loading</li>
              <li><i class="fa fa-check-square"></i> Shovels</li>
              <li><i class="fa fa-check-square"></i> Wheel Loaders</li>
              <li><i class="fa fa-check-square"></i> Motor Graders</li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Motor Scrappers</li>
              <li><i class="fa fa-check-square"></i> Dump Trucks</li>
              <li><i class="fa fa-check-square"></i> Wheel Dozers</li>
              <li><i class="fa fa-check-square"></i> Draglines</li>
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Concrete Equipment</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Concrete Breaker</li>
              <li><i class="fa fa-check-square"></i> Paver Finisher</li>
              <li><i class="fa fa-check-square"></i> Concrete Batching Plants</li>
              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Concrete Pumps</li>
              <li><i class="fa fa-check-square"></i> Concrete Mixers</li>
              <li><i class="fa fa-check-square"></i> Slew Cranes</li>
              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Tower Cranes</li>
              <li><i class="fa fa-check-square"></i> Conveyors</li>
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Material Handling Equipment</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Telescopic Handlers</li>
              <li><i class="fa fa-check-square"></i> Crawler Cranes</li>
              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Mobile Cranes</li>
              <li><i class="fa fa-check-square"></i> Truck Cranes</li>   
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Forklifts</li>
              <li><i class="fa fa-check-square"></i> Pick &amp; Carry Cranes</li>
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Material Preparation</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Crushing Plants</li>
              <li><i class="fa fa-check-square"></i> Jaw Crushers</li>
              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Pavers</li>
              <li><i class="fa fa-check-square"></i> Demolition Equipment</li>   
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style"></ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Road Construction Equipment</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Construction Equip</li>              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Vibratory Rollers</li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Boring Equipment</li>
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Construction Vehicles</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Dumpers</li>              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Articulated Haulers</li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Tunneling and Drilling</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Rotary / DTH Drilling </li>              
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Hammer Track Drill </li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
            </ul>
          </div>
        </div>

        <div class="widget_content info">
          <p><b>Laxyo has Major Equipment fleet From Manufacturers</b></p>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Bharat Earth Movers</li> 
              <li><i class="fa fa-check-square"></i> L&amp;T Case</li>  
              <li><i class="fa fa-check-square"></i> L&amp;T Komatsu</li>               
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Ingersoll-Rand India</li>
              <li><i class="fa fa-check-square"></i> Tractors India</li>  
              <li><i class="fa fa-check-square"></i> Telco Construction Equipment</li>  
            </ul>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> JCB</li>  
              <li><i class="fa fa-check-square"></i> Escorts Construction Equipment</li>  
              <li><i class="fa fa-check-square"></i> Action Construction Equipment</li>
            </ul>
          </div>
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