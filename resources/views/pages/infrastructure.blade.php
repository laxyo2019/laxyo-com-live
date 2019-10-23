@extends('layouts.app')
@section('title','Infrastructure - Laxyo Energy Limited')

<!--Start TITLE PAGE-->
@section('body')
<section class="title_page bg_3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>Infrastructure</h2>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Infrastructure</li>
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
            <h1>Our <span>Infrastructure</span></h1>
          </div>
        </div>
      </div>


      <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <section>
          <div class="row">
            <div class="title_content">
              <h3>Resource Management</h3>
            </div>
            <div class="infrastructure">
              <p>Laxyo has formed a Resource Management group for identification, review, selection, procurement and mobilisation of Plant &amp; Machinery, Manpower, Facilities, Material, Consumables and Sub-contractors required for completion of a project/job well within stipulated time schedule. Laxyo has created a large fleet of construction equipments comprising of specialised equipments viz Excavators, JCBs, Dozers, Pay Loaders, Tippers, Cranes, Lifters, Road Rollers, Rock Breakers, Tractors and Trolleys, Tankers etc for achieving speed, quality and cost effectiveness in construction work. </p>
              <p>Laxyo maintains a balance between availability, requirement and utilisation of manpower. At present it has an effective, strong, efficient and dedicated work force of more than 700 employees. A team of qualified and experienced Engineers and Professionals having vast work experience contribute in their own innovative way. Recruitment/Engagement of manpower at all levels is attended as and when required. </p>
              <p>The group makes arrangement for procurement of material and consumables from reliable sources, logistics support, inventory management and disposal of scrap, unserviceable and obsolete items. Where ever needed, Laxyo off loads part of job to sub-contractors. Proper registration of sub-contractors, monitoring of performance, continuous job rating based on track record, updating of registration are part of the core function of the group. </p>
            </div>
          </div>


          <div class="row">
            <div class="title_content">
              <h3>For Prompt &amp; Efficient Services </h3>
            </div>
            <div class="prompt_services">
              <p>Having sufficient fleet of Heavy Earth Moving Equipment in good working conditions: </p>
              <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/excavator.jpg')}}" alt="excavator" class="img img-responsive img-thumbnail">
                  <label>Excavator</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/dozer-and-bulldozer.jpg')}}" alt="dozer-and-bulldozer" class="img img-responsive img-thumbnail">
                  <label>Dozer</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/pay-loader.jpg')}}" alt="pay loader" class="img img-responsive img-thumbnail">
                  <label>Pay Loader</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/road-roller.jpg')}}" alt="road roller" class="img img-responsive img-thumbnail">
                  <label>Road Roller</label>
                </div>
              </div>


              <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/crane.jpg')}}" alt="crane" class="img img-responsive img-thumbnail">
                  <label>Crane</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/rock-breaker.jpg')}}" alt="rock breaker" class="img img-responsive img-thumbnail">
                  <label>Rock Breaker</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/tipper.jpg')}}" alt="tipper" class="img img-responsive img-thumbnail">
                  <label>Tipper</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/motor-grader.jpg')}}" alt="motor grader" class="img img-responsive img-thumbnail">
                  <label>Motor Grade</label>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/backhoe.jpg')}}" alt="backhoe" class="img img-responsive img-thumbnail">
                  <label>Backhoe</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/batching-plants.jpg')}}" alt="batching plants" class="img img-responsive img-thumbnail">
                  <label>Batching Plant</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/transit-mixture.jpg')}}" alt="transit mixture" class="img img-responsive img-thumbnail">
                  <label>Transit Mixture</label>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"> <img src="{{asset('images/lifters.jpg')}}" alt="lifters" class="img img-responsive img-thumbnail">
                  <label>Lifters</label>
                </div>
              </div>

          
              <!-- new custom gallery -->
     

  <div class="hidden" id="img-repo">
    
    <!-- #image-1 -->
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 11" src="http://dummyimage.com/600x350/ccc/969696">
    </div>
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 12" src="http://dummyimage.com/600x600/ccc/969696">
    </div>
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 13" src="http://dummyimage.com/300x300/ccc/969696">
    </div>
      
    <!-- #image-2 -->
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x350/2255EE/969696">
    </div>
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x600/2255EE/969696">
    </div>
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 23" src="http://dummyimage.com/300x300/2255EE/969696">
    </div>   
      
    <!-- #image-3-->
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 31" src="http://dummyimage.com/600x350/449955/FFF">
    </div>
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 32" src="http://dummyimage.com/600x600/449955/FFF">
    </div>
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 33" src="http://dummyimage.com/300x300/449955/FFF">
    </div>        
    
  </div>

  <div class="modal" id="modal-gallery" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
            <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
            <div id="modal-carousel" class="carousel">
     
              <div class="carousel-inner">           
              </div>
              
              <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<style type="text/css">
  .thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
  margin-top:10%;
  width:5%;
}
</style>

<script type="text/javascript">
  $(document).ready(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* change modal title when slide changes */
   $("#modal-carousel").on("slid.bs.carousel",       function () {
        $(".modal-title")
        .html($(this)
        .find(".active img")
        .attr("title"));
   });

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
    var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
    content.append(repoCopy);

    // show the modal
    $("#modal-gallery").modal("show");
  });

});
</script>
<!-- /new custom gallery -->
            </div>
          </div>
        </section>
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