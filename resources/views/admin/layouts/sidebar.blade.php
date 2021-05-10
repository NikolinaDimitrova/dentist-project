<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="sidebar-header">
    <a href="{{url('dashboard')}}" class="brand-link">

      <span class=" text align-center">
        <h3> Dental Clinic </h3>
      </span>
    </a>
  </div>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <div class="nav-item">
      <a href="{{url('dashboard')}}" class="nav-link active"><i class="fas fa-cog"></i>
        <span>Dashboard</span></a>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        @if(auth()->check()&& auth()->user()->role->name === 'admin')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="fas fa-building"></i>
            <p>
              Departments
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('department.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View all departments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('department.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create new department</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
        @if(auth()->check()&& auth()->user()->role->name === 'admin')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="fas fa-user-md"></i>
            <p>
              Specialists
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View all specialists</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctor.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add new specialist</p>
              </a>
            </li>

          </ul>
        </li>
        @endif
        @if(auth()->check()&& auth()->user()->role->name === 'doctor')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="fas fa-hospital-user"></i>
            <p>
              Appointments
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('appointment.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Check all appointments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('appointment.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create new appointment</p>
              </a>
            </li>


          </ul>
        </li>
        @endif

     

        @if(auth()->check()&& auth()->user()->role->name === 'admin')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
          <i class="fas fa-hospital-user"></i>
            <p>
              Patient Appointment
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('patient')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Today Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('all.appointments')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Appointments</p>
              </a>
            </li>


          </ul>
        </li>
        @endif


        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Front Page

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>