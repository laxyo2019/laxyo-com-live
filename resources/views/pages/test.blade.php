@extends('layouts.app')
@section('body')

<head>
	<title>Achievements - Laxyo Energy Limited</title>
</head>
<!--Start TITLE PAGE-->		
<section class="title_page bg_3">			
<div class="container">				
<div class="row">					
<div class="col-lg-12 col-md-12 col-sm-12">						
<h2>Achievements</h2>						
<nav id="breadcrumbs">							
<ul>								
<li><a href="index.php">Home</a></li>															
<li>Achievements</li>							
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
			<h1>Major <span>Achievements</span></h1>
		</div>
	</div>
</div>


	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<section>
		<div class="row">
			<div class="title_content">             
		    	<h3>32 kms of Railway Track laid in 40 Days in the rough working environment</h3>            
		    </div>            
		    <div class="infrastructure"> 
			    <p>LAXYO backed by its technical and project management skills was able to create history in completing the project of laying 32 Kms of railway track in North Western Railway Jodhpur Zone in the state of Rajasthan (India). The engineers at Laxyo used all its Logistics skills, Inventory Management and HR skill to handle labors on the construction site. Laxyo has been in the field of erection and commission projects from four decade, this enabled us to complete the project from inception to implement in the rough working condition prevailing in the desert environment.</p>
			    <p>Laxyo is thankful to all its labors and engineers who worked 24/7 just to complete the project in record time.</p> 
			             
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