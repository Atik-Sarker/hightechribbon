  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/superadmin/dashboard')}}" class="brand-link">
      <img src="{{asset('public/backEnd')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Your Company</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: url({{asset('public/backEnd/images/right-sidebar.jpg')}});background-size: cover;background-position: center;background-repeat: no-repeat;padding: 20px 0" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="image ">
              <img src="{{asset(auth::user()->image)}}" class="img-circle elevation-2" alt="User brand-imagee">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="info">
              <i class="fa fa-circle"></i>
              <a href="#" class="d-block">{{auth::user()->name}}</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if(Auth::user()->role_id==1)
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/waiter.png')}}">
              <p>
                Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/superadmin/user/add')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/superadmin/user/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
          @endif
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/balloon.png')}}">
              <p>
                Logo
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/editor/logo/add')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/editor/logo/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/slider.png')}}">
              <p>
                Slider
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/editor/slider/add')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/editor/slider/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/search.png')}}">
              <p>
                Category
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/editor/category/add')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/editor/category/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/search.png')}}">
              <p>
                Product
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/editor/product/add')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/editor/product/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- nav item end -->


          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <img src="{{asset('public/backEnd/images/contact.png')}}">
              <p>
                Contact Info
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('editor/contact/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('editor/contact/manage')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
              