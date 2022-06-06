<div class="shadow mb-5 bg-white rounded">
<nav class="navbar navbar-expand-lg navbar-light menu shadow">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img
            src="{{ '/images/logo.png' }}"
            height="40"
            alt="logo"><a style="font-family :'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><h5>Perpus SMAIT Asy Syukriyyah</h5></a>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link mx-2 {{ ($title === 'home') ? 'active' : '' }}" href="/"><i class="fas fa-plus-circle pe-2"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 {{ ($title === 'about') ? 'active' : '' }}" href="/about"><i class="fas fa-bell pe-2"></i>About</a>
        </li>
        {{--  <li class="nav-item">
          <a class="nav-link mx-2 {{ ($title === 'books') ? 'active' : '' }}" href="/books"><i class="fas fa-heart pe-2"></i>Books</a>
        </li>  --}}
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" text-center>
            <i class="bi bi-book-half"></i>  Book Category
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/books">All Books</a></li>
            <li><a class="dropdown-item" href="/categories/sma-x">SMA X</a></li>
            <li><a class="dropdown-item" href="/categories/sma-xi">SMA XI</a></li>
            <li><a class="dropdown-item" href="/categories/sma-xii">SMA XII</a></li>
          </ul>
        </li>
      </ul>
    </div>
      </div>
    </div>
  </nav>
</div>
