@extends('layouts.app')
@section('title','Material Handling Contractor | Raw Material, Bulk, Internal Material Handling')
@section('meta')
  <meta name="description" content= "We are the leading raw and bulk material handling contractor providing services of mechanical contracting for the installation and maintenance of systems for all the plants."/>    
  <meta name="keywords" content="material handling contractor, material handling, material handling in cement plant, raw material handling, bulk material handling, internal material handling, material handling service provider, material handling company, bulk material handling company, construction material handling plan"/> 
@endsection

<!--Start TITLE PAGE-->	
@section('body')	
<!--Start TITLE PAGE-->
<section class="title_page bg_3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>Material Handling Contractor</h2> 
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{url('/')}}">Home</a>
            </li>
            <li><a href="{{url('/services')}}">Services</a>
            </li>
            <li>Material Handling Contractor</li>
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
            <img src="{{asset('img/material/material handling.jpg')}}">
          </div>
          <div class="item">
            <img src="{{asset('img/material/material handling.jpg')}}">
          </div>
        </div>
       
        <!--  Page slider end here-->
        <div class="title_content">
          <h3>Material Handling Contractor</h3> 
        </div>
        <div class="sub_content">
          <p>We are the leading material handling contractor providing services of mechanical contracting for the installation and maintenance of systems for the cement plant, chemical plants, Steel plants, coal, gas, thermal, waste heat recovery boilers and co-generation power plants. We have extensive knowledge of operating the equipments and successful blend of labor, material and equipment management with one of the lowest cost in the Industry and comparable to the best standards in the industry. We provide all services pertaining to raw and bulk material handling from project formulation to project engineering and implementation. Here we offer companies the flexibility of services needed for their material handling project. We understand that every project is different needing a single service to a comprehensive retrofit or a new production line in any Industry.</p>

          <div class="widget_content info">
            <p><b>Raw Material Handling :</b></p>
            <p>Laxyo group is having durable and cost-effective raw materials handling systems to suit each client’s requirements for mining operations, chemical plants, Steel plants, coal, gas, thermal, waste heat recovery plants.  Our group of experts coordinates the ideal equipment to the control systems to accomplish your operational objectives.  The handling of raw materials entails short distance movement within a building or between a building and a transportation vehicle, relying on a wide range of manual, semi-automated and/or automated equipment. We are engaged in providing operation related services to meet the specific requirements of the clients.</p>
            </div>

          <div class="widget_content info">
          <p><b>Bulk Material Handling :</b></p>
          <p>We are providing remarkable bulk material handling plant construction and maintenance. These services offered by us are rendered by our diligent team of professionals, who are all around adverse in their individual space. Also, with the able support of our team, we can offer our customers' with uniquely custom made solutions. Further, all our services are offered in adherence with the industry set guidelines. Supported by the significant experience of the business, all the plants that we design are basically made for handling material transferring that takes place from place to another. Plants like Coal Handling Plant Construction, Ash Handling Plant Construction and Bulk Material Handling Plant Construction can be developed by us.</p>
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