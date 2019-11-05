@extends('layouts.admin')
@push('styles')
  <link rel="stylesheet" href="{{ asset('themes/vali/css/') }}">
@endpush

@section('content')
@include('partials.admin.sidebar')

  <main class="app-content">
    <div class="app-title">
      <div class="div">
        <h1><i class="fa fa-laptop"></i> Replies</h1>
      </div>
      
    </div>
    @if($message = Session::get('success'))
      <div class="alert alert-success">
        {{$message}}
      </div>
    @endif 
    <div class="row">
      <div class="col-md-12 col-xl-12">
        <div class="card shadow-xs">
          
          <div class="card-body table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact no.</th>
                  <th>Address</th>
                  <th>Document</th>
                  <th>About</th>
                  {{-- <th>Action </th> --}}
                </tr>
              </thead>
              <tbody>
              @foreach($replies as $reply)
              <tr class="text-center">
                <td>#</td>
                <td>{{$reply->name}}</td>
                <td>{{$reply->email}}</td>
                <td>{{$reply->mobile}}</td>
                <td>{{$reply->address}}</td>
                <td class="font-weight-bold">
                  <a href="{{route('download.document', ['id' => $reply->id])}}">Download</a>
                </td>
                <td class="font-weight-bold">
                  {{$reply->message}}
                </td>
                {{-- <td class="d-flex" style="border-bottom:none">
                  <span>
                    <a href="{{route('tender_master.show',$row->id)}}" class="btn btn-sm btn-primary">View Details</a>
                  </span>
                  <span>
                    <a href="{{route('tender_master.show',$row->id)}} " class="btn btn-sm btn-primary">View Details</a>
                  </span>
                </td> --}}
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection