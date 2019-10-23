@extends('layouts.app')
@section('title','Dredging Contractors, Dredger Rental Equipment Companies and Dredger Owners in India')
@section('meta')  
  <meta name="description" content= "Laxyo Group of dredging contractors provides dredging equipment rental, small dredge on lease, dredger on rent and land & reclamation service in India."/>    
  <meta name="keywords" content="Dredger service providers, dredger on rent, dredger owners in india, dredging equipment on rent, dredging equipment rental, rental dredging equipment, list of dredging companies in india, small dredge on lease, dredging contractors, Dredging companies in India, Dredging Machine and Contractors in India, dredgers and land reclamation service, dredging and reclamation, dredging contractors in india"/>  
@endsection

<!--Start TITLE PAGE-->	
@section('body')	
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Dredging and Reclamation</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>	
<li><a href="{{url('services')}}">Services</a></li>														
<li>Dredging and Reclamation</li>							
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
      <div class="item"><img src="{{asset('img/dredging/dredging-service.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/dredging/dredging-service.jpg')}}"></div>
      <div class="item"><img src="{{asset('img/dredging/dredging-service.jpg')}}"></div>
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
        <h3>Dredging Contractors </h3>            
      </div> 
      <div class="sub_content">
        <p>LAXYO ENERGY LIMITED's dredging vertical started in December 2015. We are part of Laxyo Group, a reputable, Madhya Pradesh based group of companies with a lineage of more than 50 years. We are here to provide unparalleled services to our clients. We offer <a href="{{url('dredging_and_reclamation')}}">dredging and land reclamation services</a> including operation and maintenance of portable dredgers. Backed by an enthusiastic team of qualified experts, we aim to establish ourselves in the private sector as a major dredging company.</p>

        <div class="widget_content info">
        <p>Our dredging services include:</p>
        <ul class="list_style">
          <li><i class="fa fa-check-square"></i> Capital dredging and maintenance dredging of harbors and ports</li>
          <li><i class="fa fa-check-square"></i> Dredging of rivers and canals for irrigation and waterways</li>
          <li><i class="fa fa-check-square"></i> De-silting lakes, reservoirs and ash ponds in steel plants</li>
          <li><i class="fa fa-check-square"></i> Maintaining the intake channels in power plants</li>
          <li><i class="fa fa-check-square"></i> Offshore pipeline trenching &amp; Bacfilling</li>
          <li><i class="fa fa-check-square"></i> Geophysical and hydrographic surveys</li>
          <li><i class="fa fa-check-square"></i> Underwater photography and diving services</li>
          <li><i class="fa fa-check-square"></i> Maintenance dredging</li>
          <li><i class="fa fa-check-square"></i> Land Reclamation</li>
          <li><i class="fa fa-check-square"></i> Rock Dredging (Under water drilling &amp; Controlled blasting)</li>
        </ul>
        </div>

        <div class="widget_content info">
          <p><b>What is dredging?</b></p>
          <p>Dredging refers to the underwater excavation of silt, soil and sand. The process of dredging comprises of these below mentioned steps:</p>
          <ul class="list_style">
            <li><i class="fa fa-check-square"></i> <b>Underwater Dredging:</b> This is done by deploying back hoe dredgers / grab dredgers / cutter suction dredgers and Trailer suction dredgers</li>
            <li><i class="fa fa-check-square"></i> <b>Transporting the dredged material:</b> This is done by following methods: 
              <ul>
                <li><i class="fa fa-plus-circle"></i> Slurry dredged material is transported through pipeline from the cutter suction dredger to the dumping ground.</li>
                <li><i class="fa fa-plus-circle"></i> Slurry/rock dredged materials is transported through self propelled dump barge or non propelled dump barge from the Back hoe dredger to the dumping in offshore</li>
                <li><i class="fa fa-plus-circle"></i> Dry dredged material is transported by road on a vehicle.</li>
                <li><i class="fa fa-plus-circle"></i> Slurry/sand dredged materials is transported though Trailer Suction hopper from the Trailer Suction dredger to the dumping in offshore </li>
                <li><i class="fa fa-minus-circle"></i> <b>Subsequent use of dredged material:</b> This is also done through two steps such as:
                  <ul>
                    <li><i class="fa fa-ellipsis-h"></i> &nbsp;Land development and land reclamation of low lying areas</li>
                    <li><i class="fa fa-ellipsis-h"></i> &nbsp;Building dams to fend floods</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="widget_content info">
          <p>With strict attention to quality of service, we want to maintain transparency with our clients, employees, business associates, the society and the environment. We as <a href="http://www.laxyo.com/dredging-and-reclamation.php">dredging contractors</a> have blended corporate social responsibilities and growth strategies and have put in place efficient systems to ensure the safety of our employees and the safety of the environment.</p>
        </div>

        <div class="widget_content info">
          <div class="title_content">             
            <h3>Our Objectives</h3>            
          </div>
          <ul class="list_style">
            <li><b>Navigation:</b> To build basins, harbors, jetties, canals and other facilities and/or to develop, maintain, expand or otherwise to improve essential navigation connections to inland harbors and ports, so as to promote transportation of people, material and equipment using the waterways. Both capital as well as maintenance dredging helps to achieve this goal.</li>
            <li><b>Construction and Reclamation:</b> To supply construction material like sand, clay, gravel and shell. To provide landfills, including the construction of residential and industrial areas, dams, airports and highways etc.</li>
            <li><b>Flood Control:</b> To improve or maintain the discharge or flow capabilities of channels, rivers and other waterways by maintaining or enlarging the cross section or by re-aligning the water courses.</li>
            <li><b>Environmental Remediation:</b> To remove or clean up the sub-aquedus or underwater pollutants from contaminated water bodies to improve the quality of water. As a matter of fact, <a href="{{url('dredging_and_reclamation')}}">dredger service providers</a> contributes a lot to the development, environmental and economic sectors of most countries.</li>
          </ul>
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
<!-- end Footer area-->