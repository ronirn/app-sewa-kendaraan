<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('dashboard') }}">
      <i class="bi bi-house-door-fill"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('penyewa') }}">
      <i class="bi bi-person-fill"></i>
      <span>Renters</span>
    </a>
  </li><!-- End Renters Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('kendaraan') }}">
      <i class="bi bi-truck-front-fill"></i>
      <span>Vehicles</span>
    </a>
  </li><!-- End Vehicles Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('kwitansi') }}">
      <i class="bi bi-file-earmark-ruled-fill"></i>
      <span>Receipts</span>
    </a>
  </li><!-- End Receipts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('sewa') }}">
      <i class="bi bi-cart-fill"></i>
      <span>Rentals</span>
    </a>
  </li><!-- End Rentals Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('invoice') }}">
      <i class="bi bi-file-earmark-text-fill"></i>
      <span>Invoices</span>
    </a>
  </li><!-- End Invoices Nav -->
</ul>

<style>
  /* Add hover effect */
  .sidebar-nav .nav-link {
    transition: color 0.3s, background-color 0.3s;
  }

  .sidebar-nav .nav-link:hover {
    color: #007bff; /* Change color to your desired hover color */
    background-color: #f8f9fa; /* Change background color on hover */
  }
</style>
