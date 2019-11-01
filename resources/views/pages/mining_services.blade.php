@extends('layouts.app')
@section('title','Mining Services Providers | Mining Contractors | Mining Companies in India')
@section('meta')  
  <meta name="description" content= "Laxyo has large range of products and blasting related services to the mining, quarrying and construction industries. We also offer mining services for large scale to small scale mining."/>    
  <meta name="keywords" content="Mining Services, mining ompanies in India, list of mining ompanies in India, Geology and mining, mineral processing, underground mining, Hydraulic mining, Consulting engineering, mining companies in india, list of private mining companies in india, mining contractors in india."/>
@endsection

<!--Start TITLE PAGE-->		
@section('body')
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Mining Services</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('/services')}}">Services</a></li>														
<li>Mining Services</li>							
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
      <div class="item"><img src="{{asset('img/mining/mining-service.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/mining/mining-service.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/mining/mining-service.jpg')}}"></div>
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
        <h3>Mining Services In India</h3>            
      </div> 
      <div class="sub_content">
        <p><b>Laxyo group</b> leaves strong foot print in recently started mining vertical also, where we offer diversified range of service contracts as per requirement of mining. Laxyo is Delivering its vast chain of services in energy, mining, dredging and heavy equipment rental providers. Mining is the process which required very heavy equipments as to complete internal work processes viz drilling, breaking, ore removing, blasting, and exploration. For the purpose we are equipped with fleet of latest mining equipments with blasting equipment and technicians. Along with a team of experts helping us to extracts highly valuable mineral and metals.</p>

        <p>We complete every project in the direction of industry experts and works as to develop plan for new mines, enhancing productivity of existing opened mines. We are growing as one of the leading mining consultancy from India, working with exceptional mining plan, scheduling, feasibility test, optimization of productivity, electronic machine monitoring benchmarking services. </p>

        <div class="widget_content info">
        <p>Taking over the projects based on large scale mining and small scale mining. Our major <a href="{{url('mining-services')}}">mining services</a> are included with:</p>
        <ul class="list_style">
          <li><i class="fa fa-check-square"></i> Geology and mining</li>
          <li><i class="fa fa-check-square"></i> Mineral processing</li>
          <li><i class="fa fa-check-square"></i> Material handling process</li>
          <li><i class="fa fa-check-square"></i> Surface mining (soft rock and hard rock)</li>
          <li><i class="fa fa-check-square"></i> Underground mining</li>
          <li><i class="fa fa-check-square"></i> Placer mining included with panning, dredging, sluicing, etc.</li>
          <li><i class="fa fa-check-square"></i> Hydraulic mining</li>
          <li><i class="fa fa-check-square"></i> Open pit mining</li>
          <li><i class="fa fa-check-square"></i> Consulting engineering</li>
          <li><i class="fa fa-check-square"></i> Contract mining</li>
          <li><i class="fa fa-check-square"></i> Drilling</li>
          <li><i class="fa fa-check-square"></i> Earthmoving</li>
          <li><i class="fa fa-check-square"></i> Explosives</li>
        </ul>
        </div>

        <div class="widget_content info">
          <div class="title_content">             
            <h3>Mining Process at Laxyo</h3>            
          </div>
          <p>As per needs of the Client, our process starts with detailed study of the location, area, underground elements on the surface. We proceed with: </p>
          <ul class="list_style">
            <li><i class="fa fa-check-square"></i> Analysis or Surveying: We have the team of geological experts to understand complete location, compositions of rocks, and mining activities as of stream works.</li>
            <li><i class="fa fa-check-square"></i> Reaching to the metals ore.</li>
            <li><i class="fa fa-check-square"></i> Extraction of ore from rocks, breaking down process.</li>
            <li><i class="fa fa-check-square"></i> Transferring ore to the surface.</li>
            <li><i class="fa fa-check-square"></i> Ore- Processing.</li>
            <li><i class="fa fa-check-square"></i> Amalgamation of ore. </li>
          </ul>
        </div>

        <p>Safety is one of the key features of our mining services, as integrated safe mining facilities are provided for complete safer mining methodologies. Adoption of right operations for machines, observance of gas, proper use of equipments, machineries, electric equipments etc. helps to avoid risk of outburst. We understand the mining effect on the environment and operate with a safe environment friendly mining procedure. </p>

        <p>LAXYO is ISO 9001 and 18001 (OHSAS) Certified Company hence the mining work involves a systematic work approach having proper consideration for health, safety and environment. Laxyo provides a complete solution for its Client’s mining related service requirements. Indeed Laxyo is committed to its clients but at the same time is aware of its responsibilities towards nature. We believe in having good long-term client relationship and always work accordingly.</p>

        <p>We at <a href="{{url('/')}}">Laxyo</a>, always ready to understand requirement for all the work related to mining and can help you with the best mining services in all demographics / areas of the globe. Our extensive experience from resource assessment through mine planning to mine commissioning make sure innovative, cost-efficient, environmentally suitable solution from pre-feasibility to site rehabilitation keeps us ahead from the other mining companies in India. </p>       
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