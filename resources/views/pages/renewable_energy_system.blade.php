@extends('layouts.app')
@section('title','Renewable Energy System | Laxyo Energy Ltd.')
@section('meta')
  <meta name="description" content= "Laxyo renewable energy system in India for energy cost reducation with proper optimized use of electricity."/>    
  <meta name="keywords" content="renewable energy system, renewable energy India, energy audit service, energy auditor, sustainable energy, home renewable energy system, office renewable energy system, solar power consultants,
operation and maintenance of solar power plant, Rooftop systems for home, solar power consultancy firm, spv solar power plant."/> 
@endsection

<!--Start TITLE PAGE-->
@section('body')		
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Renewable Energy System</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('services')}}">Services</a></li>														
<li>Renewable Energy System</li>							
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
      <div class="item"><img src="{{asset('img/renewable/renewable-enegy.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/renewable/renewable-enegy.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/renewable/renewable-enegy.jpg')}}"></div>
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
        <h3>Renewable Energy System in India</h3>            
      </div> 
      <div class="sub_content">
        <p>Laxyo has recently entered in to Solar power plant design, installation, supply, erection, commissioning and operation /maintenance of roof top and land based. We are also working in solar pumps. We work for micro, mini and medium capacity power plants.</p>


        <div class="widget_content info">
        <p>We work on the following basis:</p>
        <ul class="list_style">
          <li><i class="fa fa-check-square"></i> BOOT basis</li>
          <li><i class="fa fa-check-square"></i> Low cost debt financing</li>
          <li><i class="fa fa-check-square"></i> On 100% self financing</li>
        </ul>
        </div>

        <p>We have a tie up with reputed multinational companies who have market name. We also have tie up with reputed Indian companies for the supply of main components of solar pv plants for making micro plants cost competitive.</p>
      
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