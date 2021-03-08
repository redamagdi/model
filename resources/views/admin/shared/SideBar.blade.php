<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"> Menu Management </li>
        <!-- Optionally, you can add icons to the links -->
        @if( is_permited('dashboard','view') == 1 )
        <li class="{{ is_active('dashboard') }}" ><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i> <span>Dashboard ( لوجة التحكم ) </span></a></li>
        @endif

        @if( (is_permited('groups','view') == 1) || ( is_permited('users','view') == 1 )  )
        <li class="treeview {{ is_active('groups') }} {{ is_active('users') }}">
          <a href="#"><i class="fa fa-users"></i> <span> U/M ( ادارة المستخدمين ) </span>
          </a>
          <ul class="treeview-menu">
            @if( is_permited('groups','view') == 1 )
            <li class="{{ is_active('groups') }}" ><a href="{{ route('groups.index') }}"> <i class='fa fa-users'></i> Groups ( المجموعات ) </a></li>
            @endif

            @if( is_permited('users','view') == 1 )
            <li class="{{ is_active('users') }}" ><a href="{{ route('users.index') }}"> <i class='fa fa-user'></i> Users ( المستخدمين ) </a></li>
            @endif
          </ul>
        </li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
