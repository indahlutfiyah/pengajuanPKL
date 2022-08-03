<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Validasi Magang2 Individu</title>
    @include('admin/template/head')
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!--Header Sidebar-->
    @include('admin/template/sidebar')

    <!--Main-->
    <main id="main" class="main">

        <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">
            <h5 class="card-title">VALIDASI MAGANG INDIVIDU <span>| TAHAP 2</span></h5>

            <!-- MAGANG SISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Validasi Siswa <span>| Tahap 2</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Surat</th>
                        <th scope="col">Proposal</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Juminten</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>2 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Tukiyem</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>3 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Painem</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>4 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END MAGANG SISWA -->
            
            <!-- MAGANG MAHASISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Validasi Mahasiswa <span>| Tahap 2</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Asal Kampus</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Surat</th>
                        <th scope="col">Proposal</th>
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
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Cuplis</td>
                        <td>Politeknik Elektronika Negeri Surabaya</a></td>
                        <td>3 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Mintenx</td>
                        <td>Universitas Surabaya</a></td>
                        <td>4 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END MAGANG SISWA -->




            </div>
            </div><!-- End Left side columns -->
        </div>
        </section>

    </main>

    <!--Footer Script-->
    @include('admin/template/footer')

</body>
<!-- END BODY -->
</html>