<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-4">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboards.index') }}">
            <i class="fa-solid fa-desktop"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('competitions.index')}}">
            <i class="fa-solid fa-trophy"></i>
            Competitions
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('payments.index')}}">
            <i class="fa-solid fa-money-bill"></i>
             Payment
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('participants.index')}}">
            <i class="fa-solid fa-user"></i>
             Participant
          </a>
        </li>
         
  </nav>