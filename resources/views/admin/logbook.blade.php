<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Internship | Pendfataran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('template/head')
</head>

<body>
  @include('template/sidebarusers')

  <main id="main" class="main">
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
          <!-- Logbook -->
          <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">LOGBOOK ADMIN <span>| INTERNSHIP</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col" name="name">Nama</th>
                        <th scope="col" name="tgl">Tanggal</th>
                        <th scope="col" name="des">Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Unair 1</td>
                        <td>9 April 2022</td>
                        <td>Melakukan redesain landing page web bmkg Juanda</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>Undip 2</td>
                        <td>14 April 2022</td>
                        <td>Melakukan redesain tatausaha bmkg juanda</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">3</a></th>
                        <td>Unbraw 3</td>
                        <td>19 April 2022</td>
                        <td>Melakukan redesain pengajuan internship bmkg juanda</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">4</a></th>
                        <td>Unesa 4</td>
                        <td>15 April 2022</td>
                        <td>Melakukan redesain fklim bmkg juanda</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  @include('template/footer')

</body>

</html>