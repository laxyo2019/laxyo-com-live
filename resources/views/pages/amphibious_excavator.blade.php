
@extends('layouts.app')
@section('title','Amphibious Excavator | Laxyo Energy Ltd.')
@section('meta')
  <meta name="description" content= "Laxyo group offer amphibious excavator dredging equipment on rental and contract basis with small to big capacity full-fledged quality-focused service."/>    
  <meta name="keywords" content="amphibious excavator, amphibious excavator rental, amphibious excavator contractors, small amphibious excavator, amphibious excavator india"/> 
@endsection

<!--Start TITLE PAGE-->	
@section('body')	
<!--Start TITLE PAGE-->
<section class="title_page bg_3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>Amphibious Excavator</h2> 
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{url('/')}}">Home</a>
            </li>
            <li><a href="{{url('/services')}}">Services</a>
            </li>
            <li>Amphibious Excavator</li>
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
          <div class="item">
            <img src="{{asset('img/excavator/Amphibious Excavator.jpg')}}">
          </div>
          <div class="item">
            <img src="{{asset('img/excavator/Amphibious_Excavator.jpg')}}">
          </div>
        </div>
       
        <!--  Page slider end here-->
        <div class="title_content">
          <h3>Amphibious Excavator</h3> 
        </div>
        <div class="sub_content">
          <p>Laxyo group is Indore (Madhya Pradesh) based service provider of amphibious excavator rental and contractual services where our reliable service of amphibious excavator can be easily used on the land as well as water. Our quality concerned approaches help us to reach various clients throughout the nation. Our product is highly reliable and are supplied to several sectors. We ensure the most technical advanced product on rent on very attractive price range. Here we offer the multiple choice of equipment and the most experienced staff of equipment professionals in the business. We hire only the most experienced professionals from the industry who always works with quality, control and safety standards. You can be assured that our products are rugged, reliable and durable even in the harshest of conditions. We provide quality services and numerous pieces of equipment to meet the needs of marine and marsh construction project's. Our amphibious excavator dredging equipment is totally self-propelled. We have small to big capacity dredging equipment and in this way have numerous tasks can be performed. As a full-fledged service, quality-focused amphibious equipment and services company, Laxyo delivers the industry-leading expertise and custom solutions to its clients with uncompromising value, safety, ethics and performance.</p>
          <div class="widget_content info">
            <p><b>SERVICES :</b>
            </p>
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Amphibious Excavation</li>
              <li><i class="fa fa-check-square"></i> Pipeline / Utility, Right of Way Clearing</li>
              <li><i class="fa fa-check-square"></i> Pipeline Repair Support</li>
              <li><i class="fa fa-check-square"></i> Dredging</li>
              <li><i class="fa fa-check-square"></i> Highline Construction</li>
              <li><i class="fa fa-check-square"></i> Wetland Restoration</li>
              <li><i class="fa fa-check-square"></i> Dewatering Disposal Areas</li>
              <li><i class="fa fa-check-square"></i> Hazardous Waste Cleanup</li>
              <li><i class="fa fa-check-square"></i> Excavation Equipment Leasing</li>
            </ul>
          </div>
          <div class="widget_content info">
            <p><b>FEATURES :</b>
            </p>
            <ul class="list_style">
              <li><i class="fa fa-check-square"></i> Simple function</li>
              <li><i class="fa fa-check-square"></i> Advanced technology</li>
              <li><i class="fa fa-check-square"></i> Superior performance</li>
            </ul>
          </div>
          <p>We offer a safe and reliable delivery from our locations in India. Services offers from the best project management skills available in industry. We provide planning and maintenance strategies to optimize the production performance of your plant and equipment and reduce the maintenance costs of your operation. As a highly reputable single source service provider with years of industry experience behind us, our dedication and professional approach towards our clients is what drives us forward. We believe that a strong and long-lasting relationship with our partners is built on trust. And that trust can only come about when our clients feel that we are a partner that they can depend on.</p>
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
@endsection