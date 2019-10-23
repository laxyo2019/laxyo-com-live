
@extends('layouts.app')

@section('body')
<head>
    <title>Operation and Maintenance | Laxyo Energy Ltd.</title>  
  <meta name="description" content= "Laxyo Group of energy is India based leading service providers for railway, operation and maintenance, mining, dredging and reclamation services.">    
  <meta name="keywords" content="operation and maintenance, railway track laying and linking, railway contractors, mining services, dredging services, operation & maintenance, opearion and maintenance company, operation and maintenance of dairy plants, operation and maintenance of power plants.">
  
</head>

<section class="slider">
  

<div class="box-shadow">
        <div class="" id="owlslider">
                <div class="item">
                    <img src="{{asset('images/laxyo-energy-limited.jpg')}}" alt="laxyo energy limited">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">
                            <h3>Welcome! to LAXYO</h3>
                            <span>Laxyo Energy Limited is an ISO 9001:2015 and ISO 18001:2007 OHSAH Certified Company. It is amalgamated combination of firms and organizations which began several years ago.</span><br><br>
                            <a href="{{url('/about')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>                   
                    <!-- /header-text -->
                </div>

                <div class="item">
                    <img src="{{asset('images/railway-projects-services.jpg')}}" alt="railway projects services">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">
                            <h3>Railway Contractors</h3>
                            <span>Our major services for railway is included with taking over all railways contracts related to operation, maintenance, improving railways track laying etc.</span><br><br>
                            <a href="{{url('/railway_contractors')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>                   
                    <!-- /header-text -->
                </div>

                <div class="item">
                    <img src="{{asset('images/operation-and-maintainance-services.jpg')}}" alt="operation and maintainance services">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">
                            <h3>Operation and Maintenance Contractors</h3>
                            <span>Laxyo group now has become one of the leading Operation and Maintenance Service Company in India. Our reorganization is created by our work. </span><br><br>
                            <a href="{{url('/operation_and_maintenance_contractors')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <!-- /header-text -->
                </div>

                <div class="item ">
                    <img src="{{asset('images/mining-services.jpg')}}" alt="mining services">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">
                            <h3>Mining Services</h3>
                            <span>Laxyo group leaves strong foot print in recently started mining vertical also, where we offer diversified range of service contracts as per requirement of mining.</span><br><br>
                            <a href="{{url('/mining_services')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <!-- /header-text -->
                </div>

                <div class="item">
                    <img src="{{asset('images/dredging-services.jpg')}}" alt="dredging services">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">
                            <h3>Dredging and Reclamation</h3>
                            <span>LAXYO ENERGY LIMITED's dredging verticle started its December in 2015. We are part of Laxyo Group, a reputable, Madhya Pradesh based group of companies with a lineage of more than 50 years.</span><br><br>
                            <a href="{{url('dredging_and_reclamation')}}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <!-- /header-text -->
                </div>
            </div>
         
    </div>    
</section>



   

    <section class="content intro_text_box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in">
            <div class="intro_box">
              <h1>Welcome to <span>LAXYO</span></h1>
              <p>LAXYO Energy Limited was established in early 2007 by an alliance of the sister companies working for past four decades as a prominent contractor that specializes in all aspects of railway construction.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 effect-slide-left in">
            <div class="services">
              <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
              <div class="serv_detail">
                <h3>Vision</h3>
                <p>We are working with the vision to become India’s finest service providers while it comes to railway, <b><a href="{{url('/operation_maintenance')}}">operation and maintenance</a></b>(O&amp;M) service providing company with in next few years. Excel as the top most contractors for railway and O&amp;M work. Achieve long-term goodwill by work offered and good clientele base.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 effect-slide-bottom in" >
            <div class="services">
              <div class="icon"> <i class="fa fa-bullseye" aria-hidden="true"></i></div>
              <div class="serv_detail">
                <h3>Mission</h3>
                <p>To became the key service providers for core infrastructure service for complete railway roads construction, operation and maintenance (O&amp;M), power transmission, energy saving. Further to expand our selves with new area and to generate new collaborations and work scope.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 effect-slide-right in">
            <div class="services">
              <div class="icon"> <i class="fa fa-line-chart" aria-hidden="true"></i> </div>
              <div class="serv_detail">
                <h3>Value</h3>
                <p>Our values are based on ethics, integrity, hardwork, timeliness with the highly focused minds towards work.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Feature RECENT WORK--> 

    <!--Start Feature Extra-->
    <section class="content feature_rwork">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="title">
              <h2>Our <span class="heading-color">Services</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="owl-demo">
                <!--item first -->
                  <div class="item">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="project_container">
                            <div class="img_hover"> <img src="{{asset('images/railway-contractors.jpg')}}" alt="railway contractors"> <a class="hover_link" href="{{url('railway_contractors')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/railway-contractors.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                            <div class="project_info">
                              <h4> <a href="{{url('railway_contractors')}}">Railway Contractors</a> </h4>
                              <p>Railways contracts related to operation, maintenance, improving railways track laying linking, private railway siding etc. in all over India.</p> </div>
                          </div>
                        </div>
                  </div>
                <!--item first end -->
                <!--item second -->
                  <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="project_container">
                          <div class="img_hover"> <img src="{{asset('images/opetations-and-maintenance.jpg')}}" alt="opetations and maintenance"> <a class="hover_link" href="{{url('operation_and_maintenance_contractors')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/opetations-and-maintenance.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                          <div class="project_info">
                            <h4> <a href="{{url('operation_and_maintenance_contractors')}}">Operation and Maintenance Contractors</a> </h4>
                            <p>O&amp;M services based on verticals, commissioning and breakdown maintenance services for equipments. </p>
                          </div>
                        </div>
                      </div>
                  </div>
                <!--item second end -->
                <!--item third -->
                  <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="project_container">
                          <div class="img_hover"> <img src="{{asset('images/mining-services-companies.jpg')}}" alt="mining services companies"> <a class="hover_link" href="{{url('mining_services')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/mining-services-companies.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                          <div class="project_info">
                            <h4> <a href="{{url('mining_services')}}">Mining Services</a> </h4>
                            <p>Laxyo group mining services for Large scale to small scale mining. </p>
                          </div>
                        </div>
                      </div>
                  </div>
                <!--item third end -->
                <!--item fourth -->
                  <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="project_container">
                          <div class="img_hover"> <img src="{{asset('images/dredging-and-reclamation.jpg')}}" alt="dredging and reclamation"> <a class="hover_link" href="{{url('dredging_and_reclamation')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/dredging-and-reclamation.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                          <div class="project_info">
                            <h4> <a href="{{url('dredging_and_reclamation')}}">Dredging &amp; Reclamation </a> </h4>
                            <p>Laxyo Group dredging and reclamation services underwater excavation of silt , soil and land.</p>  
                          </div>
                        </div>
                      </div>
                  </div>
                <!--item fourth end -->
                <!--item fifth -->
                  <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="project_container">
                          <div class="img_hover"> <img src="{{asset('images/renewable-energy-system.jpg')}}" alt="renewable energy system"> <a class="hover_link" href="{{url('renewable_energy_system')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/renewable-energy-system.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                          <div class="project_info">
                            <h4> <a href="{{url('renewable_energy_system')}}">Renewable Energy System </a> </h4>
                            <p>Solar power plant design, installation, supply, erection, commissioning and o&amp;m of roof top and land based.</p>  
                          </div>
                        </div>
                      </div>
                  </div>
                <!--item fifth end -->
                <!--item six -->
                  <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="project_container">
                          <div class="img_hover"> <img src="{{asset('images/heavy-equipment-rental-services.jpg')}}" alt="heavy equipment rental services"> <a class="hover_link" href="{{url('heavy_equipment_rental_services')}}"><span><i class="fa fa-link"></i></span></a> <a class="hover_view mfp-image" href="{{asset('images/heavy-equipment-rental-services.jpg')}}"><span><i class="fa fa-search"></i></span></a> </div>
                          <div class="project_info">
                            <h4> <a href="{{url('heavy_equipment_rental_services')}}">Heavy Equipment Rental Services</a> </h4>
                            <p>We are aiming to be India's leading service providing company in renting/leasing.</p>  
                          </div>
                        </div>
                      </div>
                  </div>
                <!--item six end -->
                
                </div>
            </div>
        </div>
       
      </div>
    </section>
    
    <!--End Feature Extra--> 

    <!--Start Feature RECENT WORK-->
    <section class="content feature_extra" id="parallax_3">
      <div class="container">
        <div class="row">
          <div class="intro_box" id="achievement">
              <h1>Our Achievement</h1>
              <p><strong>32 Km Tracks In 40 Days,</strong><br> Utilizing all its infrastructure resources and technical skills Laxyo against all odds completed the project for Indian Railways of laying 32 Kms of railway tracks in the desert of Rajasthan, The project was implemented for NW Indian Railways Jodhpur Zone Of Rajasthan</p>
            </div>
      
        </div>
      </div>
    </section>
    
    <!-- End Feature recent Work-->
    
    <!--Start Feature Client-->
    <section class="content feature_client">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 effect-slide-top in">
            <div class="title">
              <h2>Our <span class="heading-color">Client</span></h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in"> 
          <!-- Client Slider Carousel -->
            <div class="owl-carousel carousel2 pb_20 client owl-theme" id="owl-carousel-custom">
              <div id="owl-client">
                <div class="item"> <img src="{{asset('img/clients/indian-railway.jpg')}}" alt="indian railway"> </div>
                <div class="item"> <img src="img/clients/birla-corporation.jpg" alt="birla corporation"> </div>
                <div class="item"> <img src="img/clients/aditya-birla.jpg" alt="aditya birla"> </div>
                <div class="item"> <img src="img/clients/adani.jpg" alt="adani"> </div>
                <div class="item"> <img src="img/clients/essar.jpg" alt="essar"> </div>
                <div class="item"> <img src="img/clients/L-and-T.jpg" alt="L and T"> </div>
                <div class="item"> <img src="img/clients/jindal.jpg" alt="jindal"> </div>
                <div class="item"> <img src="img/clients/binani.jpg" alt="binani"> </div>
                <div class="item"> <img src="img/clients/dalmia-bharat.jpg" alt="dalmia bharat"> </div>
                <div class="item"> <img src="img/clients/bil.jpg" alt="bil"> </div>
                <div class="item"> <img src="img/clients/RSWM.jpg" alt="RSWM"> </div>
                <div class="item"> <img src="img/clients/coastal.jpg" alt="coastal"> </div>
                <div class="item"> <img src="img/clients/destimoney.jpg" alt="destimoney"> </div>
                <div class="item"> <img src="img/clients/Oriental-Foundry-Pvt.-Ltd..jpg" alt="Oriental Foundry Pvt. Ltd."> </div>
                <div class="item"> <img src="img/clients/Continental-Warehousing-Corporation-Limited.jpg" alt="Continental Warehousing Corporation Limited"> </div>
                <div class="item"> <img src="img/clients/gokul.jpg" alt="gokul"> </div>
              </div>
            </div>
            <!-- Client Slider Carousel End --> </div>
        </div>
      </div>

    </section>
     <script type="text/javascript">
        $(document).ready(function() {
          $("#owl-client").owlCarousel({
              autoPlay: 3000, //Set AutoPlay to 3 seconds
              items : 6,
              pager : false,
              pagination: false,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3],
              dots : false,
          });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              //autoPlay: 3000, //Set AutoPlay to 3 seconds
              items : 4,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]
          });
            $("#owlslider").owlCarousel({
 
              navigation : false,
              paginationSpeed : 400,
              singleItem:true,
              autoPlay: 5000,
              stopOnHover : true  ,
 
 
           });
        });
    </script>
 
@endsection
