<div class="top-bar">
  <div class="container">
    <div class="row float">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <p><i class="bi bi-telephone-fill"></i>+6281218467536</p>
          </div>
          <div class="col-md-6">
            <p><i class="bi bi-envelope"></i>info@dailycustomer.info</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>
</div>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 100px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link {{ Request::is('fitur*') ? 'active' : '' }}" href="#">FITUR</a>  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="nav-link {{ Request::is('restauran') ? 'active' : '' }}" href="/restauran">Restauran</a></li>
              <li><a class="nav-link {{ Request::is('laundry') ? 'active' : '' }}" href="/laundry">Laundry</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('carakerja') ? 'active' : '' }}" href="/carakerja">CARA KERJA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="/daftar">DAFTAR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>