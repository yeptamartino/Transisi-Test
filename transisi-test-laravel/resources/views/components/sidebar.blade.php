<!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree" style="margin-bottom: 100px">
    <li class="header">CONTENT MANAGEMENT SISTEM </li>
    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i>Dashboard</a></li>
      <li class="treeview">
        
        <a href="#">
          <i class="fa fa-bank"></i>
          <span>Companies</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.company')}}"><i class="fa fa-circle-o"></i>Daftar Comapany</a></li>
          <li><a href="{{route('admin.company.create')}}"><i class="fa fa-circle-o"></i>Tambah Comapany</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Employees</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.employee')}}"><i class="fa fa-circle-o"></i>Daftar Employee</a></li>
          <li><a href="{{route('admin.employee.create')}}"><i class="fa fa-circle-o"></i>Tambah Employee</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-plus"></i>
          <span>Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.admin')}}"><i class="fa fa-circle-o"></i>Daftar Admin</a></li>
          <li><a href="{{route('admin.admin.create')}}"><i class="fa fa-circle-o"></i>Tambah Admin</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Logout</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>       
      </li>    
  </ul>
