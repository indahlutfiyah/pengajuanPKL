<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Rekap PKL</title>
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
            <h5 class="card-title">REKAP PENGAJUAN PKL <span>| Individu/Kelompok</span></h5>

            <!-- PKL SISWA -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Rekap Individu</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Asal</th>
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
                        <td>SMKSedati1</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>2 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>SMKSedati2</td>
                        <td>SMK NEGERI 1 SEDATI</a></td>
                        <td>3 Bulan</td>
                        <td>Pertek</td>
                        <td><a href="#"><i class="bi bi-folder-plus"></i></a></td>
                        <td><a href="#"><i class="bi bi-folder2-open"></i></a></td>
                        <td><button type="button" class="btn btn-primary">ACC</button>&nbsp;<button type="button" class="btn btn-danger">DEC</button></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>SMKSedati3</td>
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
            <!-- END PKL SISWA -->
            
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