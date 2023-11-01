<?php 
include "configregister.php";


if(isset($_POST['register'])){
    $nama=mysqli_real_escape_string($con,htmlspecialchars(trim($_POST['nama_depan'] ." ". $_POST['nama_belakang'])));
    $email =mysqli_real_escape_string($con,htmlspecialchars(trim($_POST['email'])));
    $username =mysqli_real_escape_string($con,htmlspecialchars(trim($_POST['username'])));
    $password  =mysqli_real_escape_string($con,htmlspecialchars(trim($_POST['password'])));
    $password1 =mysqli_real_escape_string($con,htmlspecialchars(trim($_POST['cpassword'])));
    $pwd='';

    if($password != $password1){
        die(PassAlert());
    }

    if(!uniq_email($email)) {
        die(DupEmail());
    } else{
        $pwd= password_hash($password, PASSWORD_DEFAULT);
        $result = insert("INSERT INTO akun_pasien(email_pasien, password_pasien, nama_pasien, username)  VALUES('$email','$pwd','$nama','$username')");
        if($result == 1){
            header("location: notif_register.php");
        }
    }
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
    <meta name="description" content="Website fasilitas dari SIAKLIK">
    <meta name="keywords" content="siaklik, klinik kampus, bpjs" />
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/vanillatop.min.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/register-form.css">
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
                        <a class="logo-text custom-text-head" href="../index.php">SIAKLIK<br><span class="span-logo" style="color:white;">SISTEM PELAYANAN KLINIK KESEHATAN</span></a>
                    </li>
                </ul>
            </div>
            <ul class="list-unstyled components custom-menu-bar">
                <!-- <p class="active"><i class="fas fa-home"></i>Dummy Heading</p> -->
                <li class="custom-menu-sidebar active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tasks"></i>Beranda Menu</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php
                        
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?> 
                        <!-- show HTML logout button -->
                        <li>
                        <a href="../akses/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                        <?php else: ?>
                        <!-- show HTML login button --> 
                        
                        <li>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-sign-in-alt"></i>Login Akun</a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="../menu_klinik.php"><i class="fas fa-book"></i>Menu Admin</a>
                        </li>
                        <li>
                            <a href="../poli/antrian.php"><i class="fas fa-user-friends"></i>Daftar Antrian</a>
                        </li>
                        <li>
                            <a href="../poli/poliumum.php"><i class="fas fa-clinic-medical"></i>Poli Umum</a>
                        </li>
                        <li>
                            <a href="../poli/poli_gigi.php"><i class="fas fa-tooth"></i>Poli Gigi</a>
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
                    <a href="#pageArtikel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-newspaper"></i>Artikel</a>
                    <ul class="collapse list-unstyled" id="pageArtikel">
                        <li>
                            <a href="https://drive.google.com/file/d/1IUDjC2UDmxYaZn8Jzari8G7tagSactuT/preview"><i class="fas fa-bookmark"></i>HIV / AIDS</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/13aN5HJiE0dy-oL_VX7scSd5IIbAyJfL9/preview"><i class="fas fa-bookmark"></i>STROKE</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1L_rULKmC9Lg8PCmSWz2VxJ3XpytEDL4o/preview"><i class="fas fa-bookmark"></i>TBC / TUBERKULOSIS</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1ugoq8IDg2wiIEDX3LCMjDK7863xCdYA0/preview"><i class="fas fa-bookmark"></i>HEPATITIS</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1PpQgSf7SEhG4xo_-KhbGr_RwsXzTzJQr/preview"><i class="fas fa-bookmark"></i>DIARE</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/15MP8PG4tTvAvhI2rAtL94eLkxOX88kxi/preview"><i class="fas fa-bookmark"></i>PENEUMONIA</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/16cio4CNtYGz1Q2eht0Z7h8RXt77J50RQ/preview"><i class="fas fa-bookmark"></i>DIFTERI</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1XNv2ch2kjCIQZ_1eK2iTu3jnHGp39Pkw/preview"><i class="fas fa-bookmark"></i>DBD / DEMAM BERDARAH DENGUE</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1jiIc5jOHaAaTKqqtn1-Trpg4XaShhbFx/preview"><i class="fas fa-bookmark"></i>KANKER</a>
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
                            <a href="#"><i class="fas fa-phone-alt"></i>Contact : 021-1043408</a>
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
                            <a href="#"><i class="fas fa-user-md"></i>dr. RR. HENNY YUNIARTI</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>drg. IDA APRILIANTI</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pagePerawat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-briefcase-medical"></i>Perawat</a>
                    <ul class="collapse list-unstyled" id="pagePerawat">
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>MOH TOYYIB,S.Kep</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>MUFARIDA , Amd.Kep</a>
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
                                    <a class="dropdown-item custom-dropdown" href="../poli/antrian.php" target="_blank"><i class="fas fa-user-friends"></i>Daftar Antrian</a>
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
                            
                        <?php
                        
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?> 
                        <!-- show HTML logout button -->
                        <li class="nav-item">
                        <a class="nav-link custom-text-light" href="../akses/logout.php"><i class="fas fa-sign-out-alt"></i>Keluar</a>
                        </li>
                        <?php else: ?>
                        <!-- show HTML login button --> 
                        
                        
                            <li class="nav-item">
                                    <a class="nav-link custom-text-light" href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Masuk</a>
                            </li>
                        <?php endif; ?>
                            
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
                <section class="register-section">
                    <div class="container form-register">
                        <div class="form-header">
                            <h5><i class="fas fa-plus"></i>Register Pasien Baru</h5>
                        </div>
                        <hr class="">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                <form action="" method="POST" class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Nama Depan</label>
                                            <input type="text" class="form-control" name="nama_depan" id="validationCustom01" placeholder="Tulis Nama Depan..." required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Nama Belakang</label>
                                            <input type="text" class="form-control" name="nama_belakang" id="validationCustom02" placeholder="Tulis Nama Belakang..." required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom04">Username</label>
                                            <input type="text" class="form-control" name="username" id="validationCustom04" placeholder="Tulis Username Anda..." required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom03">E-mail</label>
                                            <input type="email" class="form-control" name="email" id="validationCustom03" placeholder="Tulis E-mail Anda..." required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom05">Password</label>
                                            <input type="password" class="form-control" name="password" id="validationCustom05" placeholder="Tulis Password Anda..." required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom06">Confirm Password</label>
                                            <input type="password" class="form-control" name="cpassword" id="validationCustom06" placeholder="Tulis Confirm Password Anda..." required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" name="register" type="submit">Daftar</button>
                                </form>
                            </div>
                        </div>
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                  }, false);
                                });
                              }, false);
                            })();
                        </script>
                    </div>
                </section>
                <hr>
                <section>Masuk Beranda untuk Login Pasien jika sudah mendaftar</section>
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
                            <h5 class=""><i class="footer-icons fas fa-map-marker-alt"></i>Alamat Poliklinik</h5>
                            <p class="text-light">Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294</p>
                            <p class="text-light custom-buka-hover">Buka dengan <a href="https://www.google.com/maps?ll=-7.333339,112.788588&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=12854831982186720929" target="_blank" class="custom-buka-hover"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;Google Map</a></p>
                            
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        
                        <!-- End Grid column -->
                        <!-- End Grid column -->
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
                <div class="footer-copyright bg-dark text-light text-center py-3">Created at 2020
                </div>
                <!-- Copyright -->
            </footer>
            <!-- END of Footer -->

        </div>
        <!-- End of Page Main Body Page Content  -->

    </div>
    <!-- PAGE WRAPPER -->

    <!-- SCRIPT LIST -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            $('#sidebarCollapse2').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <!-- start vanillatop plugin -->
    </div><a href="#!" class="vanillatop"><i class="fas fa-angle-up"></i></a>
    <script src="../dist/vanillatop.min.js"></script>
    <!-- end vanillatop plugin -->
    
</body>
</html>