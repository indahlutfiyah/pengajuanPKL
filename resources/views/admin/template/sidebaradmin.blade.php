      <!--Header-->
      <header id="header" class="header fixed-top d-flex align-items-center">

        <!-- Logo -->
        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="../img/LOGO BMKG.png" alt="">
                <span class="d-none d-lg-block"><b>BMKG JUANDA</b></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <!-- Profile -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../img/man.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin BMKG</span>
                    </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Profile -->

    </header>
<!--End Header-->
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">VALIDASI PKL</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-check"></i><span>PKL Tahap 1</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin/pkl1individu">
              <i class="bi bi-circle"></i><span>Individu</span>
            </a>
          </li>
          <li>
            <a href="admin/pkl1kelompok">
              <i class="bi bi-circle"></i><span>Kelompok</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>PKL Tahap 2</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin/pkl2individu">
              <i class="bi bi-circle"></i><span>Individu</span>
            </a>
          </li>
          <li>
            <a href="admin/pkl2kelompok">
              <i class="bi bi-circle"></i><span>Kelompok</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin/pklrekap">
          <i class="bi bi-archive"></i>
          <span>Rekap PKL</span>
        </a>
      </li><!-- End Register Page Nav --> 


      <li class="nav-heading">VALIDASI MAGANG</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-check"></i><span>Magang Tahap 1</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin/magang1individu">
              <i class="bi bi-circle"></i><span>Individu</span>
            </a>
          </li>
          <li>
            <a href="admin/magang1kelompok">
              <i class="bi bi-circle"></i><span>Kelompok</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Magang Tahap 2</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin/magang2individu">
              <i class="bi bi-circle"></i><span>Individu</span>
            </a>
          </li>
          <li>
            <a href="admin/magang2kelompok">
              <i class="bi bi-circle"></i><span>Kelompok</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin/magangrekap">
          <i class="bi bi-archive"></i>
          <span>Rekap Magang</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-heading">LOGBOOK</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="admin/logbookpkl">
          <i class="bi bi-journal-check"></i>
          <span>Logbook PKL</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin/logbookpkl">
          <i class="bi bi-journal-check"></i>
          <span>Logbook Magang</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->