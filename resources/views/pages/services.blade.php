@extends('layouts.app')
@section('title','Services offered for Railway projects, operation and maintenance ( O&amp;M), mining, dredging and reclamation, renewable energy system, equipment rental services')
@section('meta')  
	<meta name="description" content= "Laxyo Group of energy is India's core service providers for railway, operation and maintenance, mining, dredging and reclamation services."/>    
	<meta name="keywords" content="operation and maintenance contractors, mining, signalling contractors, renewable energy system, rental services."/>
@endsection

<!--Start TITLE PAGE-->	
@section('body')	
<section class="title_page bg_3">			


<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Services</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="{{url('/')}}">Home</a></li>															
<li>Services</li>							
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
			<h1>Our Core <span>Services</span></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<!-- service 1 -->
		<div class="row pb_30">
			<div class="title_content">
				<h3>Railway Contractors</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/railway-project.jpg')}}" alt="railway project" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Laxyo energy ltd. has expertise of four decades strengthened by highly sophisticated technical base for construction, survey, fixing of alignment, designing railway roads mapping. Core Railway services are included with bridging rail/road, steel fabrication. Laxyo Group of energy is associated with Indian railways from four decades, and had the chance to work from starting from survey design to final commissioning of rail track even on EPC (Engineering, Procurement, and Construction) basis as well as for allied infrastructure like electrification, signaling, service, buildings, etc. </p>
					<a href="{{url('/railway_contractors')}}">Read More >></a>
				</div>
			</div>					
		</div>
		<!-- service 2 -->
		<div class="row pb_30">
			<div class="title_content">
				<h3>Operation and Maintenance</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-3 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/operation-and-maintenance-contractors.jpg')}}" alt="operation and maintenance contractors" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Laxyo Energy LTD operation and maintenance services are included with all the aspects essential to run and carry on work (O&amp;M) services varied power plants in India. A distinguished service provider in the field of Operation and Maintenance ( O&amp;M) of variety of Plants, including operation of RO/DM/Softening Plant, Boiler, Turbine, DCS, Electrical, instrumentation, CHP/AHP etc. and preventive, break down along with  annual maintenance work. India based highly trusted leading Operation and Maintenance contractors delivering competitive range of services.</p>
					<a href="{{url('/operation_maintenance')}}">Read More >></a>
				</div>
			</div>					
		</div>
		<!-- service 3 -->
        <div class="row pb_30">
			<div class="title_content">
				<h3>Mining Services</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-3 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/mining.jpg')}}" alt="mining" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Laxyo group of energy is offering world class consulting solution for the mining industries in India. Mining services are included with comprehensive range of services from civil earthworks, surface mining operations. Our major expertises are included in minerals sector. We accomplish every project with under supervision and team having technical expertise depth knowledge for mining related services. Our team plans and work together with primary aim of obtaining the best and result oriented work. </p>
					<a href="{{('/mining_services')}}">Read More >></a>
				</div>
			</div>					
		</div>
		
		<!-- service 4 -->
        <div class="row pb_30">
			<div class="title_content">
				<h3>Dredging and Reclamation Services</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-3 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/dredging.jpg')}}" alt="dredging" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Posses experience and proficiency in complete supervision of dredging and reclamation projects. World Class magnificent dredging machinery suppliers in all over India.  Dredging services are equipped with complete assessment, evaluation, geo – technical analysis and reclamation, specification offered at different locations across India.   </p>
					<a href="{{url('/dredging_and_reclamation')}}">Read More >></a>
				</div>
			</div>					
		</div>
        
		<!-- service 5 -->
		<div class="row pb_30">
			<div class="title_content">
				<h3>Renewable Energy System</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/renewable-energy-system.jpg')}}" alt="renewable-energy-system" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>As an renewable resource consultants Laxyo energy ltd. helps you in best utilization of natural resources such as solar power, wind, and hydroelectricity by converting them in to consumable form of energy. Our vision is to save all the natural resources which are depleting over from the years.  Approach is to undertake projects based on wind, farm, ground water solution, geo thermal, solar and tidal. We works for micro, mini and medium capacity power plants.  </p>
					<a href="{{url('/renewable_energy_system')}}">Read More >></a>
				</div>
			</div>					
		</div>

		<!-- service 5 -->
		<div class="row pb_30">
			<div class="title_content">
				<h3>Rental Services</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('images/heavy-equipment-on-rent.jpg')}}" alt="heavy equipment on rent" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Laxyo energy ltd. provides construction equipment on rent at very cost-effective prices for a flexible process for a length of time. These equipments are widely used for different kinds of building construction and repairing. Providing a wide range of heavy equipments on rental basis across the country. Growing as helping contractors succeeding in serving heavy equipment rental.  Equipment rental for construction and industrial sites. Get the excellent working equipments. Get the rental equipment for all your need on affordable costs. </p>
					<a href="{{url('/construction_equipment_rental_services')}}">Read More >></a>
				</div>
			</div>					
		</div>

		<div class="row pb_30">
			<div class="title_content">
				<h3>Amphibious Excavator</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3 col-sm-12 effect-slide-left in" data-effect="slide-left" style="transition: all 0.7s ease-in-out 0s;">
					<img src="{{asset('img/amphibious.jpg')}}" alt="amphibious excavator" class="img img-responsive img-thumbnail">
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9 effect-slide-left in">
					<p>Laxyo group is Indore (Madhya Pradesh) based service provider of amphibious excavator rental and contractual services where our reliable service of amphibious excavator can be easily used on the land as well as water. Our quality concerned approaches help us to reach various clients throughout the nation. Our product is highly reliable and is supplied to several sectors. We ensure the most technical advanced product on rent on very attractive price range. Here we offer the multiple choice of equipment and the most experienced staff of equipment professionals in the business.</p>
					<a href="{{url('amphibious_excavator')}}">Read More >></a>
				</div>
			</div>					
		</div>

	</div>

<!--Sidebar Widget-->
	<div class="col-sm-3 col-md-3 col-lg-3">
		@include('partials.sidebar')
	</div>
</div> 
<!--END ROW-->
</div>
</section>	
@endsection