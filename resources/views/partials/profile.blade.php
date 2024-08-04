<li class="nav-item dropdown pe-3">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    
    <span class="d-none d-md-block dropdown-toggle ps-2">
      {{ Auth::check() ? Auth::user()->name : 'Guest' }}
    </span>
  </a><!-- End Profile Image Icon -->
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
      <h6>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h6>
      <span>{{ Auth::check() ? (Auth::user()->role ?? '') : 'N/A' }}</span> <!-- Optional: Display user role if applicable -->
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item">
      <a class="dropdown-item" href="{{ route('profile.edit') }}">
        <i class="bi bi-person"></i> <span>My Profile</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link dropdown-item">
          <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span>
        </button>
      </form>
    </li>
  </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->
