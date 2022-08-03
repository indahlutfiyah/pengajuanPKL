<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Logbook PKL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../img/LOGO BMKG.png" rel="icon">
    <link href="../img/LOGO BMKG.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!--Header-->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                <a href="" class="logo d-flex align-items-center">
                    <img src="../img/LOGO BMKG.png" alt="">
                    <span class="d-none d-lg-block"><b>BMKG JUANDA</b></span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="../img/man.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">Admin BMKG</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                </ul>
            </nav><!-- End Icons Navigation -->
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

    <!--Main-->
    <main id="main" class="main">

        <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">
            <h5 class="card-title">LOGBOOK PKL <span>| Siswa/Mahasiswa</span></h5>

            <!-- PKL SISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Logbook PKL <span>| Individu</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Cek</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Juminten</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>Pertek</td>
                        <td>Bulan Mei</td>
                        <td><button type="button" class="btn btn-success">ACC</button></td>
                        <td>Sudah ACC</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Tukiyem</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>Pertek</td>
                        <td>Bulan Mei</td>
                        <td><button type="button" class="btn btn-success">ACC</button></td>
                        <td>Sudah ACC</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Painem</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>Pertek</td>
                        <td>Bulan Mei</td>
                        <td><button type="button" class="btn btn-success">ACC</button></td>
                        <td>Sudah ACC</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END PKL SISWA -->
            
            <!-- PKL MAHASISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Validasi Mahasiswa <span>| Tahap 1</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Asal Kampus</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">CV</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Mukidi</td>
                        <td>Universitas Airlangga</a></td>
                        <td>2 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Cuplis</td>
                        <td>Politeknik Elektronika Negeri Surabaya</a></td>
                        <td>3 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Mintenx</td>
                        <td>Universitas Surabaya</a></td>
                        <td>4 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END PKL SISWA -->




            </div>
            </div><!-- End Left side columns -->
        </div>
        </section>

    </main>
    <!--End Main-->

    <!--Footer-->
        <footer id="footer" class="footer">
            <div class="copyright">
            &copy; Copyright <strong><span>BMKG Juanda</span></strong>. All Rights Reserved. Designed by TIM PKL D3 SI UNAIR 2022
            </div>
            <div class="credits">
            </div>
        </footer><!-- End Footer -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!--End Footer-->

    <!--Script-->
        <script src="/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/chart.js/chart.min.js"></script>
        <script src="/vendor/echarts/echarts.min.js"></script>
        <script src="/vendor/quill/quill.min.js"></script>
        <script src="/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="/vendor/tinymce/tinymce.min.js"></script>
        <script src="/vendor/php-email-form/validate.js"></script>
        <script src="../js/main.js"></script>
    <!--End Script-->
</body>
<!-- END BODY -->
</html>