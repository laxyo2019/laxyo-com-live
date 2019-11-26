<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li>
    <a href="{{route('admin.jobs.index')}}" class="app-menu__item"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Careers</span></a>
    </li>
    <li><a href="{{route('admin.vendors.index')}}" class="app-menu__item "><i class="app-menu__icon fa  fa-registered"></i><span class="app-menu__label">Vendors</span></a></li>
    <li><a href="{{route('admin.contacts.index')}}" class="app-menu__item "><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Contacts</span></a></li>
   {{--  <li><a href="{{route('admin.feedbacks.index')}}" class="app-menu__item "><i class="app-menu__icon fa fa-comments-o"></i><span class="app-menu__label">Feedbacks</span></a></li>
    
    <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{route('admin.settings.site_variables')}}"><i class="icon fa fa-circle-o"></i> Site Variables</a></li>
      </ul>
    </li> --}}
    
  </ul>
</aside> 