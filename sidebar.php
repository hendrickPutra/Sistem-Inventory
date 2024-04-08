<div class="col-lg-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:220px">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light bg-dark' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-door"></i> Dashboard</a>
            </li>
            <?php if ($hasil['level'] == 1) { ?>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="user"><i class="bi bi-person-circle"></i> user</a>
              </li>
            <?php } ?>
            <li class="nav-item">
              <?php if ($hasil['level'] == 1) { ?>
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'warehouse') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="warehouse"><i class="bi bi-boxes"></i> Warehouse</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <?php if ($hasil['level'] == 1 || $hasil['level'] == 2) { ?>
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'counter1') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="counter1"><i class="bi bi-box-seam"></i> Counter 1</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <?php if ($hasil['level'] == 1 || $hasil['level'] == 3) { ?>
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'counter2') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="counter2"><i class="bi bi-box-seam"></i> Counter 2</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <?php if ($hasil['level'] == 1 || $hasil['level'] == 4) { ?>
          <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'counter3') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="counter3"><i class="bi bi-box-seam"></i> Counter 3</a>
      </li>
    <?php } ?>
    <li class="nav-item">
      <?php if ($hasil['level'] == 1 || $hasil['level'] == 5) { ?>
        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'counter4') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="counter4"><i class="bi bi-box-seam"></i> Counter 4</a>
    </li>
  <?php } ?>
  <li class="nav-item">
    <?php if ($hasil['level'] == 1 || $hasil['level'] == 6) { ?>
      <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'counter5') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="counter5"><i class="bi bi-box-seam"></i> Counter 5</a>
  </li>
<?php } ?>
<?php if ($hasil['level'] == 1) { ?>
  <li class="nav-item">
    <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light bg-dark' : 'link-dark'; ?>" href="report"><i class="bi bi-file-text"></i> report</a>
  </li>
<?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>