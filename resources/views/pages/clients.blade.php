@extends('layouts.app')
@section('title','Clients - Laxyo Energy Limited')


<!--Start TITLE PAGE-->		
@section('body')
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Clients</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Clients</li>							
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
  	<div class="col-lg-12 col-md-12 col-sm-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
  		<div class="intro_box">
  			<h1>Our <span>Clients</span></h1>
  		</div>
  	</div>


	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<section>
		<div class="row">
			<div class="title_content">
        <div class="title_widget">           
		    	<h3>Our Clients</h3>
        </div>            
		  </div>  
      <div class="col-sm-12 mtl">
        <div class="row">
          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 3" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/indian-railway.jpg')}}" alt="indian railway">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 4" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/birla-corporation.jpg')}}" alt="birla corporation">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 5" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/aditya-birla.jpg')}}" alt="aditya birla">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 6" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/adani.jpg')}}" alt="adani">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 7" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/essar.jpg')}}" alt="essar">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 8" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/L-and-T.jpg')}}" alt="L-and-T">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 9" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/jindal.jpg')}}" alt="jindal">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 10" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/binani.jpg')}}" alt="binani">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 11" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/dalmia-bharat.jpg')}}" alt="dalmia bharat">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 11" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/bil.jpg')}}" alt="bil">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 11" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/RSWM.jpg')}}" alt="RSWM">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 12" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/coastal.jpg')}}" alt="coastal">
          </a></div> 

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 12" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/destimoney.jpg')}}" alt="destimoney">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 1" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/Oriental-Foundry-Pvt.-Ltd..jpg')}}" alt="Oriental Foundry Pvt. Ltd.">
          </a></div>

          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 2" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/Continental-Warehousing-Corporation-Limited.jpg')}}" alt="Continental Warehousing Corporation Limited">
          </a></div>
          
          <div class="col-lg-2 col-sm-4 col-xs-6"><a title="Image 2" href="#">
          <img class="thumbnail img-responsive" src="{{asset('img/clients/gokul.jpg')}}" alt="gokul">
          </a></div>
          <hr>  
          <hr>
        </div>
      </div>          
		</div>
	</section>	
	          
	</div>
<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
 
<!--END ROW-->
</div>
</section>	
@endsection