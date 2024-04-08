<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-lg">
    <a class="navbar-brand" href=".">
      <img src="assets/img/logoPronce1.png" alt="Logo Pronce" style="max-height: 30px;">
      Pronce Haruny Company
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $hasil['username']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
