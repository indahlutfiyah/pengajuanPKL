<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pengajuan | Tahap 2</title>
    @include('users/template/head')
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>
    <!--Header Sidebar-->
    @include('users/template/sidebar')

    <!--Main-->
    <main id="main" class="main">

        <div class="pagetitle">

        </div><!-- End Page Title -->

        <section class="section profile">
        <div class="row">
            <div class="col-xl-12">

            <div class="card">
                
                <div class="card-body pt-3">
                <br>
                <h3 style="text-align:center">Pengajuan PKL/Magang</h3>
                <br>
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                    <h5 class="card-title">Input Berkas</h5>
                </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active tahap2" id="tahap2">
                    
                    <!-- Profile Edit Form -->
                    <form>
                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-12 col-form-label">Surat Persetujuan dari Asal Sekolah/Kampus</label>
                        <div class="col-md-8 col-lg-11">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-12 col-form-label">Proposal Kegiatan</label>
                        <div class="col-md-8 col-lg-11">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        </div>
                        <br>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                        <br>
                    </form><!-- End Profile Edit Form -->
                    </div>


                </div><!-- End Bordered Tabs -->

                </div>
            </div>

            </div>
        </div>
        </section>

    </main>

    <!--Footer Script-->
    @include('users/template/footer')

</body>
<!-- END BODY -->
</html>