@extends('layouts.main')
@section('content')

<!-- Navbar Content -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3 mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Tech Test Programmer</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a class="nav-link {{ Request::is('dashboard') ? 'active fw-bold' : '' }}" href="/dashboard">Dashboard</a>
        <a class="nav-link {{ Request::is('employee') ? 'active fw-bold' : '' }}" href="/employee">Employee</a>
        <a class="nav-link {{ Request::is('department') ? 'active fw-bold' : '' }}" href="/department">Department</a>
        <a class="nav-link {{ Request::is('spending') ? 'active fw-bold' : '' }}" href="/spending">Spending</a>

      </div>

      <!-- Icon profil dengan dropdown -->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none toggle-profile" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#0C843C" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#0C843C" class="ms-2" geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512.02 319.26">
            <path d="M5.9 48.96 48.97 5.89c7.86-7.86 20.73-7.84 28.56 0l178.48 178.48L434.5 5.89c7.86-7.86 20.74-7.82 28.56 0l43.07 43.07c7.83 7.84 7.83 20.72 0 28.56l-192.41 192.4-.36.37-43.07 43.07c-7.83 7.82-20.7 7.86-28.56 0l-43.07-43.07-.36-.37L5.9 77.52c-7.87-7.86-7.87-20.7 0-28.56z"/>
          </svg>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item profile" href="/profile"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0C843C" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>  Profile</a></li>
          <li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0C843C" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>  Log out</button>
                
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

@endsection