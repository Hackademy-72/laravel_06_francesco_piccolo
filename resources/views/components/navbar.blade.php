<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">ForumMilano</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('index')}}">Discussioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Account
          </a>
          <ul class="dropdown-menu">
            @auth
            <li><a class="dropdown-item" href="#">Il Tuo Account</a></li>
            <hr>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}">@csrf</form>
            @else
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            @endauth
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>