<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Smart Trip Sumedang</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html"><img src="{{ asset('img/logo2.png') }}" width="30px" alt=""></a>
    </div>
    <ul class="sidebar-menu">
      @if (Auth::user()->role == 'USER')

        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="{{ route('user.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

        <li class="menu-header">Package</li>
        <li class="{{ request()->is('package*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('package-list.index') }}">
            <i class="fas fa-door-open"></i> <span>List Package</span>
          </a>
        </li>

        <li class="menu-header">TRANSAKSI</li>
        <li class="{{ request()->is('my-booking-list*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('my-booking-list.index') }}">
            <i class="fas fa-list"></i> <span>My Booking List</span>
          </a>
        </li>

        <li class="menu-header">SETTING</li>
        <li class="{{ request()->is('change-pass*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('user.change-pass.index') }}">
            <i class="fas fa-key"></i> <span>Ganti Password</span>
          </a>
        </li>

      @endif

      @if (Auth::user()->role == 'ADMIN')

        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

        <li class="menu-header">DATA MASTER</li>
        <li class="{{ request()->is('admin/package*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('package.index') }}">
            <i class="fas fa-door-open"></i> <span>Package</span>
          </a>
        </li>
        <li class="{{ request()->is('admin/user*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-user"></i> <span>User</span>
          </a>
        </li>

        <li class="menu-header">TRANSAKSI</li>
        <li class="{{ request()->is('admin/booking-list*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('booking-list.index') }}">
            @inject('booking_list', 'App\Models\BookingList')
            <i class="fas fa-list"></i> <span>{{ $booking_list->where("status", "PENDING")->count() > 0 ? '('.$booking_list->where("status", "PENDING")->count().')' : '' }} Booking List</span>
          </a>
        </li>

        <li class="menu-header">SETTING</li>
        <li class="{{ request()->is('admin/change-pass*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('admin.change-pass.index') }}">
            <i class="fas fa-key"></i> <span>Ganti Password</span>
          </a>
        </li>

      @endif

      </ul>

  </aside>
</div>