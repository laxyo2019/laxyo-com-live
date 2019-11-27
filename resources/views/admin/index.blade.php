@extends('layouts.admin')
@section('title','Dashboard')
@section('meta')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@endsection
@section('content')
  @include('partials.admin.sidebar')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        <p>www.laxyo.com</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><a href="{{route('admin.jobs.index')}}" ><i class="icon fa fa-users fa-3x"></i></a>
          <div class="info">
            <a href="{{route('admin.jobs.index')}}"><h4>Careers</h4></a>
            <p><span class="badge badge-success">
              {{$jobs}} New
                </span></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><a href="{{route('admin.vendors.index')}}" ><i class="icon fa fa-thumbs-o-up fa-3x"></i></a>
          <div class="info">
            <a href="{{route('admin.vendors.index')}}" ><h4>Vendors</h4></a>
            <p><span class="badge badge-success">{{$vendors}} New</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><a href="{{route('admin.contacts.index')}}" ><i class="icon fa fa-files-o fa-3x"></i></a>
          <div class="info">
            <a href="{{route('admin.contacts.index')}}" ><h4>Contacts</h4></a>
            <p><span class="badge badge-success">{{$contacts}} New</span></p>
          </div>
        </div>
      </div>
      {{-- <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
          <div class="info">
            <h4>Feedbacks</h4>
            <p><span class="badge badge-success">5 New</span></p>
          </div>
        </div>
      </div> --}}
    </div>
  </main>
  
  <script type="text/javascript">
    var data = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
          {
              label: "My First dataset",
              fillColor: "rgba(220,220,220,0.2)",
              strokeColor: "rgba(220,220,220,1)",
              pointColor: "rgba(220,220,220,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56]
          },
          {
              label: "My Second dataset",
              fillColor: "rgba(151,187,205,0.2)",
              strokeColor: "rgba(151,187,205,1)",
              pointColor: "rgba(151,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: [28, 48, 40, 19, 86]
          }
      ]
    };
    var pdata = [
      {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
      },
      {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
      }
    ]
    
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);
    
    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
@endsection