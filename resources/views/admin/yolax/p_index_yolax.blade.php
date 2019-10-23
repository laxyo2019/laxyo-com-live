@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
  .navbar{
    margin-bottom: 50px;
  }
</style>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
         
        </div>
      </div>
         <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <a href="{{url('/career_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career</span></a>
        </li>
          <li><a href="{{url('/contact_yolax')}}" class="app-menu__item"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contact</span></a></li>
                  
        <li><a href="{{url('/post_yolax')}}" class="app-menu__item active"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Job Post</span></a></li>
        <li><a href="{{url('/sitevars_yolax')}}" class="app-menu__item "><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Site Vars</span></a></li>
        
      </ul>
    </aside> 
<main class="app-content">
<div class="container">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Job Post</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Job Post  </a></li>
        </ul>
      </div>

<div class="row">
  <div class="col-md-12"  >
    <button class="btn btn-info" type="submit" id="bulk_delete_post">Delete</button>
    <a href="{{route('post_yolax.create')}}" class="btn btn-primary" style="float: right">Add New Post</a>
  </div>
  </div>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
  <table class="table table-bordered bg-light text-center" id="posttable" style="caption-side: top">
    <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td>Sr No.</td>
          <td>Job Title</td>
          <td>Active</td>
          <td>Action</td>
        </tr>
        
    </thead>
    <tbody>
      <?php $count = 1;?>
           @foreach($post as $posts)
            <tr>
             <td><?php echo $count ?></td>
             <td>{{$posts->job_title}}</td>
             @if($posts ->active == 1)
                <td>True</td>
             @else
                 <td>False</td>
             @endif  
             <td>
               <a href="post_yolax/{{$posts->id}}/edit" class="text-primary"><span class="fa fa-edit fa-lg"></span></a>
                <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-{{ $posts->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-{{ $posts->id }}" action="{{ route('post_yolax.destroy', $posts->id) }}" method="POST" style="display: none;">
                      @csrf
                      @method('delete')
                  </form>

             </td>

            </tr>
           <?php $count++; ?>
         @endforeach
    </tbody>
  </table>
</div>
</div>
  </main>

@endsection