<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pengajuan | Tahap 1</title>
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

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tahap1"><b>Individu</b></button>
                    </li>
                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tahap2"><b>Kelompok</b></button>
                    </li>
                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active tahap1" id="tahap1">
                    <h5 class="card-title">Input Data Diri</h5>
                    <!-- Profile Edit Form -->
                    <form>
                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-8">
                            <input name="" type="text" class="form-control" id="" value="">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Asal Sekolah/Kampus</label>
                        <div class="col-md-8 col-lg-8">
                            <input name="" type="text" class="form-control" id="" value="">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">No.Telp</label>
                        <div class="col-md-8 col-lg-8">
                            <input name="alamat rumah" type="text" class="form-control" id="" value="">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-8">
                            <input name="email" type="text" class="form-control" id="" value="">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Periode Magang</label>
                        <div class="col-md-8 col-lg-3">
                            <input name="semester" type="date" class="form-control" id="" value="">
                        </div>
                            <label for="no telp" class="col-md-4 col-lg-2 col-form-label" style="text-align:center">Sampai</label>
                        <div class="col-md-8 col-lg-3">
                            <input name="semester" type="date" class="form-control" id="" value=""> 
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Pilihan Tempat</label>
                        <div class="col-md-8 col-lg-8">
                            <select class="form-select" aria-label="Default select example">
                            <option selected>-</option>
                            <option value="1">Teknisi</option>
                            <option value="2">Observasi</option>
                            <option value="3">Aero</option>
                            <option value="4">Datin</option>
                            <option value="5">TU</option>
                            </select>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Rencana Kegiatan</label>
                        <div class="col-md-8 col-lg-8">
                        <textarea class="form-control" style="height: 100px"></textarea>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Upload CV</label>
                        <div class="col-md-8 col-lg-8">
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

                    <div class="tab-pane fade show tahap2" id="tahap2">
                        <h5 class="card-title">Input Data Diri</h5>
                        <!-- Profile Edit Form -->
                        <form>
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Nama Semua Anggota</label>
                            <div class="col-md-8 col-lg-8">
                            <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Asal Sekolah/Kampus</label>
                            <div class="col-md-8 col-lg-8">
                                <input name="" type="text" class="form-control" id="" value="">
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">No.Telp Perwakilan</label>
                            <div class="col-md-8 col-lg-8">
                                <input name="alamat rumah" type="text" class="form-control" id="" value="">
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Email Perwakilan</label>
                            <div class="col-md-8 col-lg-8">
                                <input name="email" type="text" class="form-control" id="" value="">
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Periode Magang</label>
                            <div class="col-md-8 col-lg-3">
                                <input name="semester" type="date" class="form-control" id="" value="">
                            </div>
                                <label for="no telp" class="col-md-4 col-lg-2 col-form-label" style="text-align:center">Sampai</label>
                            <div class="col-md-8 col-lg-3">
                                <input name="semester" type="date" class="form-control" id="" value=""> 
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Pilihan Tempat</label>
                            <div class="col-md-8 col-lg-8">
                                <select class="form-select" aria-label="Default select example">
                                <option selected>-</option>
                                <option value="1">Teknisi</option>
                                <option value="2">Observasi</option>
                                <option value="3">Aero</option>
                                <option value="4">Datin</option>
                                <option value="5">TU</option>
                                </select>
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Rencana Kegiatan</label>
                            <div class="col-md-8 col-lg-8">
                            <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                            </div>
    
                            <div class="row mb-3">
                            <label for="no telp" class="col-md-4 col-lg-3 col-form-label">Upload CV</label>
                            <div class="col-md-8 col-lg-8">
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