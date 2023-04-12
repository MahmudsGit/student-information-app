<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark p-3">
    <!-- Navbar Brand-->
    <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
        Student Information
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="ms-auto">
        <a class="text-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
