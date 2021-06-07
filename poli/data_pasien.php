<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
    if (isset($_SESSION['level']) && $_SESSION['level'] == "admin") {
    
    }
    else {
        header("location:../index.php?pesan=error");
    }
    
} else {
    header("location:../index.php?pesan=belumlogin");
}
?>

<!DOCTYPE HTML>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/images/logo.ico">
    
    <!-- Desc page -->
    <title>SIAKLIK</title>
    <meta name="description" content="Website Siaklik">
    <meta name="keywords" content="klinik, bpjs, kesehatan" />

    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/vanillatop.min.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- link the sweetalert stylsheet -->
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <script src="../assets/js/sweetalert.min.js"></script>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/page-style.css">
</head>

<body>
    <!-- PAGE WRAPPER -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <div class="sidebar-header">
                <div class="close-sidebar">
                    <button type="button" id="sidebarCollapse2" class="button-times">
                        <i class="fas fa-times"></i>
                        <span></span>
                    </button>
                </div>
                <ul class="custom-logo">
                    <li class="custom-logo-child">
                        <img class="logo-upn" src="../assets/images/logo.png" alt="logo-upn">
                    </li>
                    <li class="custom-logo-child">
                        <a class="logo-text custom-text-head" href="#">SIAKLIK<br><span class="span-logo" style="color:white;">SISTEM PELAYANAN KLINIK KESEHATAN</span></a>
                    </li>
                        <p class="mb-0"><i class="fas fa-circle online-s"></i>Pekerja Klinik</p>
                </ul>
            </div>
            <ul class="list-unstyled components custom-menu-bar">
                <!-- <p class="active"><i class="fas fa-home"></i>Dummy Heading</p> -->
                <li class="custom-menu-sidebar active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tasks"></i>Beranda Menu</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../akses/logout.php"><i class="fas fa-sign-out-alt"></i>Keluar Akun</a>
                        </li>
                        <li>
                            <a href="../menu_klinik.php"><i class="fas fa-book"></i>Menu Admin</a>
                        </li>
                        <li>
                            <a href="../poli/data_antrian.php"><i class="fa fa-bell"></i>&nbsp;Data Antrian</a>
                        </li>
                        <li>
                            <a href="../poli/data_pasien.php"><i class="fas fa-user-friends"></i>Data Pasien</a>
                        </li>
                        <li>
                            <a href="../poli/poliumum.php"><i class="fas fa-clinic-medical"></i>Poli Umum</a>
                        </li>
                        <li>
                            <a href="../poli/poli_gigi.php"><i class="fas fa-grimace"></i>Poli Gigi</a>
                        </li>
                        <li>
                            <a href="../poli/alurpoli.php"><i class="fas fa-procedures"></i>Informasi & Pelayanan Pasien</a>
                        </li>
                        <li>
                            <a href="../poli/laboratorium.php"><i class="fas fa-flask"></i>Laboratorium Sederhana</a>
                        </li>
                        <li>
                            <a href="../poli/rujukan.php"><i class="fas fa-hospital-user"></i>Rujukan Berjenjang ke RS</a>
                        </li>
                        <li>
                            <a href="#pageGrafik" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-chart-bar"></i>Data Grafik</a>
                            <ul class="collapse list-unstyled" id="pageGrafik">
                                <li>
                                    <a href="../grafik/Grafik-kelamin.php"><i class="fas fa-chart-area"></i>Grafik Kunjungan Berdasarkan Kelamin</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2013.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2013</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2014.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2014</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2015.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2015</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2016.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2016</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2017.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2017</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2018.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2018</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2019.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2019</a>
                                </li>
                                <li>
                                    <a href="../grafik/Grafik-2020.php"><i class="fas fa-chart-pie"></i>Grafik Kunjungan Berdasarkan SATKER Tahun 2020</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clock" aria-hidden="true"></i>Jam Layanan</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><i class="far fa-clock"></i>Buka Jam  : 08.00 WIB</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-store-alt-slash"></i>Tutup Jam : 16:00 WIB</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-calendar-week"></i>Hari kerja : Senin - Jumat</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageContact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-address-book"></i>Contact</a>
                    <ul class="collapse list-unstyled" id="pageContact">
                        <li>
                            <a href="#"><i class="fas fa-phone-alt"></i>Contact : 031-8706369</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-envelope"></i>E-mail : klinik@siaklik.ac.id</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageDokter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-stethoscope"></i>Dokter</a>
                    <ul class="collapse list-unstyled" id="pageDokter">
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>Dokter 1</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>Dokter 2</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pagePerawat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-briefcase-medical"></i>Perawat</a>
                    <ul class="collapse list-unstyled" id="pagePerawat">
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>Perawat 1</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>Perawat 2</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageMedia" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-photo-video"></i>Media Galeri</a>
                    <ul class="collapse list-unstyled" id="pageMedia">
                        <li>
                            <a href="../poli/galeri.php?#galery-foto" target="_blank"><i class="fas fa-image"></i>Album Foto</a>
                        </li>
                        <li>
                            <a href="../poli/galeri.php?#galery-video" target="_blank"><i class="fas fa-film"></i>Album Video</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- End of Sidebar -->

        <!-- Page Main Body Page Content  -->
        <div id="content">
            <!-- navbar top -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn custom-btn-color">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto py-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link custom-text-light" href="../index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown show">
                                <a class="nav-link custom-text-light" href="#" id="PoliDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Klinik <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-icons" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item custom-dropdown" href="../menu_klinik.php"><i class="fas fa-chalkboard-teacher"></i>Menu Admin</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../poli/antrian.php" target="_blank"><i class="fas fa-user-friends"></i>Antrian Online</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../poli/poliumum.php" target="_blank"><i class="fas fa-clinic-medical"></i>Poli Umum</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../poli/poli_gigi.php" target="_blank"><i class="fas fa-tooth"></i>Poli Gigi</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../poli/alurpoli.php" target="_blank"><i class="fas fa-procedures"></i>Informasi & Pelayanan Pasien</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../grafik/grafik.php" target="_blank"><i class="fas fa-chart-bar"></i>Data Grafik</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="../index.php?#about" target="_blank"><i class="fas fa-info-circle"></i>Tentang Klinik</a>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                    <a class="nav-link custom-text-light" href="../akses/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Keluar</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!--Modal: Login / Register Form-->
                <!-- Large modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="custom-modal-wrapper">
                                <div class="modal-header bg-warning d-flex justify-content-center">
                                    <div class="col-1"></div>
                                    <h5 class="col-10 modal-title text-center mx-auto" id="exampleModalLabel">Pilih Peran Pengguna</h5>
                                    <button type="button" class="close mx-auto" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <!-- row requires "row-divided" class -->
                                <div class="modal-body row row-divided">
                                    <div class="col-md-6 px-4 column-one">
                                        <div class="custom-modal-header patient">
                                            <i class="fas fa-user-alt"></i>
                                            <h5>Pasien Klinik</h5>
                                        </div>
                                        <div class="patient-form">
                                            <form class="input-data" action="../akses/cek_login.php" method="post" name="patient-form">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="Patient-email" aria-describedby="emailHelp" placeholder="Enter email" required="" name="patient-email">
                                                    <small id="patient-emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="Patient-password" placeholder="Password" required="" name="patient-password" autocomplete="on">
                                                </div>
                                                <div class="form-group">
                                                    <img src="../akses/generate.php" alt="captcha">
                                                </div>
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="kode" value="" placeholder="Kode captcha" maxlength="5"/>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="Patient-check">
                                                    <label class="form-check-label" for="patient-check" value="ingat-patient">ingat saya</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="patient-submit" value="patient-submit">Masuk</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="vertical-divider">or</div>
                                    <div class="col-md-6 px-4 column-two">
                                        <div class="custom-modal-header klinik">
                                            <i class="fas fa-user-md"></i>
                                            <h5>Pekerja Klinik</h5>
                                        </div>
                                        <div class="klinik-form">
                                            <form class="input-data" action="../akses/cek_login.php" method="post" name="klinik-form">
                                                <div class="form-group">
                                                    <label for="text">Email address</label>
                                                    <input type="email" class="form-control" id="Klinik-email" aria-describedby="emailHelp" placeholder="Enter email" required="" name="klinik-email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" id="Klinik-password" placeholder="Password" required="" name="klinik-password" autocomplete="on" type="password">
                                                </div>
                                                <div class="form-group">
                                                    <img src="../akses/generate.php" alt="captcha">
                                                </div>
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="kode" value="" placeholder="Kode captcha" maxlength="5"/>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="Klinik-check" value="ingat-klinik">
                                                    <label class="form-check-label" for="Klinik-check">ingat saya</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="klinik-submit" value="klinik-submit">Masuk</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- register link -->
                                <div class="modal-footer pb-2">
                                    <div class="col-md-12 text-center p-2">
                                        <p>Belum punya akun pasien ? Daftar akun pasien baru sekarang !</p>
                                        <a type="button" class="btn btn-success" target="_blank" href="../akses/register.php">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal: Login / Register Form-->
            </nav>
            <!-- end of navbar top -->

            <!-- body -->
            <main>
                <section class="table-wrap">
                <!-- ADD -->
                    <div class="modal fade" id="addmhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">System Notification: Add Member</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                            <form action="../cruds/create.php" method="POST">
                                <div class="register-input container-fluid px-4 pt-4 mt-3"> 
                                    <form class="form-data" id="form-data-inputs" method="post" name="register_form">
                                        <div class="form-group row">
                                            <label for="ID-Patient" class="col-sm-3 col-form-label">No. Pasien</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="id" placeholder="Tulis Nomor Pasien / NPM" name="id" maxlength="13">
                                                <p class="font-weight-light info-pasien pt-1"><b>*</b> jika <strong style="color: green;">nomor pasien</strong> dikosongkan, maka akan bertambah +1 dari data nomor pasien sebelumnya</p>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label for="Name-Patient" class="col-sm-3 col-form-label">Nama Lengkap Pasien</label>
                                            <div class="col-sm-9">
                                                <input type="name" class="form-control checker" id="nama" placeholder="Tulis Nama Pasien" name="nama" required="" maxlength="31">
                                                <p class="text-danger err" id="err_nama_pasien"></p>
                                            </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label for="Age-Patient" class="col-sm-3 col-form-label">Umur Pasien</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control checker" id="umur" placeholder="Tulis Umur Pasien" name="umur" required="">
                                                        <p class="text-danger err" id="err_umur_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row purple-border">
                                                    <label for="Adress_Patient" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <textarea maxlength="100" cols="70" class="form-control checker" id="alamat" rows="2" name="alamat" placeholder="Tulis Alamat Pasien" required=""></textarea>
                                                        <p class="text-danger err" id="err_alamat_pasien"></p>
                                                        <span class="hint" style="color: red" id="textarea_message"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Job-Patient" class="col-sm-3 col-form-label">Pekerjaan Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="Job" class="form-control checker" id="pekerjaan" placeholder="Tulis Pekerjaan Pasien" name="pekerjaan" required="" maxlength="30">
                                                        <p class="text-danger err" id="err_pekerjaan_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Status-Patient" class="col-sm-3 col-form-label">Status Pasien</label>
                                                    <div class="col-sm-9">
                                                        <input type="Status" class="form-control checker" id="status" placeholder="Tulis Status Pasien" name="status" required="" maxlength="40" autocomplete="off">
                                                        <p class="text-danger err" id="err_status_pasien"></p>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group mb-0">
                                                    <div class="row">
                                                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                                        <div class="col-sm-9 pb-2">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="jk" value="L" id="jk" checked="">
                                                                <label class="form-check-label pr-4" for="gridL" style="cursor: pointer;">
                                                                    Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline py-2">
                                                                <input class="form-check-input" type="radio" name="jk" value="P" id="jk">
                                                                <label class="form-check-label" for="gridP" style="cursor: pointer;">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger err" id="err_jenkel"></p>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group row">
                                                    <label for="NIP-Patient" class="col-sm-3 col-form-label">NIP/NPT Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="NIP" class="form-control" id="nip" placeholder="Tulis NIP Pasien" name="nip" maxlength="30">
                                                        <p class="text-danger err" id="err_nip_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="NoBPJS-Patient" class="col-sm-3 col-form-label">Nomor BPJS Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="BPJS" class="form-control" id="bpjs" placeholder="Tulis Nomor BPJS Pasien" name="bpjs" maxlength="30">
                                                        <p class="text-danger err" id="err_no_bpjs"></p>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <div class="row">
                                                        <legend class="col-form-label col-sm-3 pt-0">Keterangan Pasien</legend>
                                                            <div class="form-check form-check-inline col-sm-3 pl-3">
                                                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="internal" checked="">
                                                                <label class="form-check-label" for="In_pasien" style="cursor: pointer;">Pasien Internal</label>
                                                            </div>
                                                            <div class="form-check form-check-inline col-sm-4 pl-3">
                                                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="eksternal" checked="">
                                                                <label class="form-check-label" for="Eks_pasien" style="cursor: pointer;">Pasien Eksternal</label>
                                                            </div>
                                                    </div>
                                                    <p class="text-danger err" id="err_keterangan_options"></p>
                                                </fieldset>
                                                <hr class="dropdown-divider">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 text-center my-4">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" value="Submit" name="insertdata" id="insertdata" class="btn btn-primary">Setuju & Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                <!-- EDIT -->
                    <div class="modal fade" id="editmhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">System Notification: Update Member</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            <form action="../cruds/update.php" method="POST">
                                <div class="update-input container-fluid px-4 pt-4 mt-3"> 
                                    <input type="hidden" name="update_id" id="update_id">
                                    <form class="form-data" id="form-data-inputs" method="post" name="update_form">
                                        <div class="form-group row">
                                            <label for="ID-Patient" class="col-sm-3 col-form-label">No. Pasien</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="id" placeholder="Ubah Nomor Pasien / NPM" name="id" maxlength="13">
                                                <p class="font-weight-light info-pasien pt-1"><b>*</b> jika <strong style="color: green;">nomor pasien</strong> dikosongkan, maka akan bertambah +1 dari data nomor pasien sebelumnya</p>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label for="Name-Patient" class="col-sm-3 col-form-label">Nama Lengkap Pasien</label>
                                            <div class="col-sm-9">
                                                <input type="name" class="form-control checker" id="nama" placeholder="Ubah Nama Pasien" name="nama" required="" maxlength="31">
                                                <p class="text-danger err" id="err_nama_pasien"></p>
                                            </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label for="Age-Patient" class="col-sm-3 col-form-label">Umur Pasien</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control checker" id="umur" placeholder="Ubah Umur Pasien" name="umur" required="">
                                                        <p class="text-danger err" id="err_umur_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row purple-border">
                                                    <label for="Adress_Patient" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <textarea maxlength="100" cols="70" class="form-control checker" id="alamat" rows="2" name="alamat" placeholder="Ubah Alamat Pasien" required=""></textarea>
                                                        <p class="text-danger err" id="err_alamat_pasien"></p>
                                                        <span class="hint" style="color: red" id="textarea_message"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Job-Patient" class="col-sm-3 col-form-label">Pekerjaan Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="Job" class="form-control checker" id="pekerjaan" placeholder="Ubah Pekerjaan Pasien" name="pekerjaan" required="" maxlength="30">
                                                        <p class="text-danger err" id="err_pekerjaan_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Status-Patient" class="col-sm-3 col-form-label">Status Pasien</label>
                                                    <div class="col-sm-9">
                                                        <input type="Status" class="form-control checker" id="status" placeholder="Ubah Status Pasien" name="status" required="" maxlength="40" autocomplete="off">
                                                        <p class="text-danger err" id="err_status_pasien"></p>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group mb-0">
                                                    <div class="row">
                                                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                                        <div class="col-sm-9 pb-2">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="jk" value="L" id="jk" checked="">
                                                                <label class="form-check-label pr-4" for="gridL" style="cursor: pointer;">
                                                                    Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline py-2">
                                                                <input class="form-check-input" type="radio" name="jk" value="P" id="jk" checked="">
                                                                <label class="form-check-label" for="gridP" style="cursor: pointer;">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger err" id="err_jenkel"></p>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group row">
                                                    <label for="NIP-Patient" class="col-sm-3 col-form-label">NIP/NPT Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="NIP" class="form-control" id="nip" placeholder="Ubah NIP Pasien" name="nip" maxlength="30">
                                                        <p class="text-danger err" id="err_nip_pasien"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="NoBPJS-Patient" class="col-sm-3 col-form-label">Nomor BPJS Pasien</label>
                                                    <div class="col-sm-8">
                                                        <input type="BPJS" class="form-control" id="bpjs" placeholder="Ubah Nomor BPJS Pasien" name="bpjs" maxlength="30">
                                                        <p class="text-danger err" id="err_no_bpjs"></p>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <div class="row">
                                                        <legend class="col-form-label col-sm-3 pt-0">Keterangan Pasien</legend>
                                                            <div class="form-check form-check-inline col-sm-3 pl-3">
                                                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="internal" checked="">
                                                                <label class="form-check-label" for="In_pasien" style="cursor: pointer;">Pasien Internal</label>
                                                            </div>
                                                            <div class="form-check form-check-inline col-sm-4 pl-3">
                                                                <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="eksternal" checked="">
                                                                <label class="form-check-label" for="Eks_pasien" style="cursor: pointer;">Pasien Eksternal</label>
                                                            </div>
                                                    </div>
                                                    <p class="text-danger err" id="err_keterangan_options"></p>
                                                </fieldset>
                                                <hr class="dropdown-divider">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 text-center my-4">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" value="Submit" name="updatedata" id="updatedata" class="btn btn-primary">Setuju & Ubah</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                

                <!-- DELETE -->
                    <div class="modal fade" id="deletemhs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">System Notification: Delete Member</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                
                            <form action="../cruds/delete.php" method="POST">
                                <div class="modal-body">
                                    <input type="hidden" name="delete_id" id="delete_id">
                                    <h4>Anda yakin akan menghapus data ini ?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" value="Submit" name="deletedata" id="deletedata" class="btn btn-primary">Setuju & Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Content Header -->     
                <div class="custom-header about-header" align="center">
                    <h2><i class="fa fa-book"></i>&nbsp;Data Pasien</h2>
                    <p>Kelola Data Pasien Klinik Siaklik</p>
                </div><hr><br>
                    <nav class="bg-light">
                    	<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                    		<div class="input-group">
  								<div class="btn-group" role="group" aria-label="First group">
    								<button type="button" class="btn-add btn btn-primary" data-toggle="modal" data-target="#addmhs"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Pasien</button>
  								</div>
                                <div class="btn-group" role="group" aria-label="Second group">
                                    <a href="../cruds/export.php">
                                        &nbsp;&nbsp;<button type="button" class="btn-export btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i></button>
                                    </a>
                                </div>
  							</div>
  							<div class="input-group">
                                <a href="../poli/data_pasien.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-sync" aria-hidden="true"></i></button>
                                </a>&nbsp;&nbsp;
  								<form class="form-inline" action="" method="POST">
                                    <div class="input-group-prepend">
    									<input class="form-control mr-sm-2" type="text" name="inputsrdata" placeholder="Cari data..." aria-label="Search" required>
                                        <button class="btn btn-primary" type="submit" name="searchdata" id="searchdata"><i class="fa fa-search"></i></button>
                                    </div>
    							</form>
  							</div>
						</div>
					</nav>
                    
            <div class="table-responsive">
                <?php include '../cruds/read_pagination.php'; ?>

                <table id="datatableid" class="table table-bordered" style="width:100%">
                    <thread>
                    <tr>
                        <th scope="col" style="padding:10px;">ID</th>
                        <th scope="col" style="padding:10px;">NAMA</th>
                        <th scope="col" style="padding:10px;">UMUR</th>
                        <th scope="col" style="padding:10px;">ALAMAT</th>
                        <th scope="col" style="padding:10px;">PEKERJAAN</th>
                        <th scope="col" style="padding:10px;">STATUS</th>
                        <th scope="col" style="padding:10px;">KELAMIN</th>
                        <th scope="col" style="padding:10px;">NIP/NRP</th>
                        <th scope="col" style="padding:10px;">NO BPJS</th>
                        <th scope="col" style="padding:10px;">KETERANGAN</th>
                        <th scope="col" style="padding:10px;">ACTION</th>
                    </tr>
                    </thead>
    
                    <tbody>
                    <?php include '../cruds/search.php';
                        $cek = mysqli_num_rows($query_search);
                        if($cek < 1){
                    ?>
                    <tr>
                        <td colspan="11" align="center" style="padding:10px;">Data tidak ditemukan..</td>
                    </tr>
            
                    <?php
                        }else{
                            while($row = mysqli_fetch_array($query_search)) {
                    ?>

                    <?php  while($row = mysqli_fetch_array($query_page)){ ?>
                    <tr>
                        <td scope="row" style="padding:5px;"> <?php echo $row['id_pasien']; ?> </td>
                        <td data-label="nama" style="padding:5px;"> <?php echo $row['nama_pasien']; ?> </td>
                        <td data-label="umur" style="padding:5px;"> <?php echo $row['umur_pasien']; ?> </td>
                        <td data-label="alamat" style="padding:5px;"> <?php echo $row['alamat_pasien']; ?> </td>
                        <td data-label="pekerjaan" style="padding:5px;"> <?php echo $row['pekerjaan_pasien']; ?> </td>
                        <td data-label="status" style="padding:5px;"> <?php echo $row['status_pasien']; ?> </td>
                        <td data-label="jk" style="padding:5px;"> <?php echo $row['jenis_kelamin']; ?> </td>
                        <td data-label="nip" style="padding:5px;"> <?php echo $row['nip_pasien']; ?> </td>
                        <td data-label="bpjs" style="padding:5px;"> <?php echo $row['no_bpjs']; ?> </td>
                        <td data-label="keterangan" style="padding:5px;"> <?php echo $row['keterangan']; ?> </td>
                        <td scope="row" style="padding:5px;">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a href="#" class="btn btn-success btn-sm editbtn" data-toggle="modal" data-target="#editmhs"><i class="fa fa-edit"></i></a>&nbsp;
                            <a href="#" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#deletemhs"><i class="fa fa-trash"></i></a>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                    
                    <?php
                        }
                      }
                    }
                    ?>
                    <br>
                </table>
            </div><br>

                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                   	<div class="input-group">
  						<div class="btn-group" role="group" aria-label="First group">
    						<h6>
                                <?php include '../cruds/countdata.php';
                                    echo "Jumlah data pasien : <b>".$jumlah."</b>";
                                ?>
                            </h6>
  						</div>
  					</div>
  					<div class="input-group">
    					<div class="input-group-prepend">
      						<?php if(isset($total_page)) {
                        		if ($total_page>1) {
                            		if($page>1) { ?>
                
                    			<div class="left">
                        			<a class="btn-page btn btn-success" href="../poli/data_pasien.php?link=<?php echo $page-1; ?>"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                    			</div>
                    		&nbsp;&nbsp;
                    		<?php }
                        		if($page<$total_page) { ?>

                    			<div class="right">
                        			<a class="btn-page btn btn-success" href="../poli/data_pasien.php?link=<?php echo $page+1; ?>">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
                    			</div>
                    		<?php 
                        		} 
                      		  }
                    		}
                    		?>
    					</div>
  					</div>
				</div>
      		<br><br><br>
		</section>
	</main>
	<!-- End of Main -->

            <!-- Footer -->
            <footer class="page-footer font-small footer-background pt-4 text-light">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                            <!-- Content -->
                            <h5 class=""><i class="footer-icons fas fa-map-marker-alt"></i>Alamat Klinik</h5>
                            <p class="text-light">Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</p>
                            <p class="text-light custom-buka-hover">Buka dengan <a href="https://www.google.com/maps?ll=-7.333339,112.788588&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=12854831982186720929" target="_blank" class="custom-buka-hover"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;Google Map</a></p>
                            
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                            <!-- Links -->
                            <h5 class=" "><i class="footer-icons fas fa-address-book"></i>Kontak</h5>
                            <ul class="list-unstyled font-weight-normal">
                                <li>
                                    <a>Telephone : 031-8706369</a>
                                </li>
                                <li>
                                    <a>klinik@siaklik.ac.id</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                <!-- Footer Links -->
                <!-- Copyright -->
                <div class="footer-copyright bg-dark text-light text-center py-3">@ <?php echo date('Y'); ?>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- END of Footer -->

        </div>
        <!-- End of Page Main Body Page Content  -->

    </div>
    <!-- PAGE WRAPPER -->

    <!----------------------------------- SCRIPT LIST --------------------------------------------------->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- jQuery  -->
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

    <!-- start vanillatop plugin -->
    </div><a href="#!" class="vanillatop"><i class="fas fa-angle-up"></i></a>
    <script src="../dist/vanillatop.min.js"></script>
    <!-- end vanillatop plugin -->
    
    <!-- Custom JS -->
    <script src="../assets/js/updatedata.js"></script>
    <script src="../assets/js/deletedata.js"></script>
    <script src="../assets/js/side-scroll.js"></script>
    
</body>
</html>