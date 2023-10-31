<?php
include("../config/koneksi.php");

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    header("location:../index.php?pesan=belumlogin");
}

$query = mysqli_query($koneksi, "SELECT * FROM antrian_bpjs");
$lastid = mysqli_num_rows($query);
$row = $lastid+1;
$nomor = str_pad($row, 3, "0",STR_PAD_LEFT);
$kodebpjs = "A".$nomor;

$query1 = mysqli_query($koneksi, "SELECT * FROM antrian_umum");
$lastid1 = mysqli_num_rows($query1);
$row1 = $lastid1+1;
$number = str_pad($row1, 3, "0",STR_PAD_LEFT);
$kodeumum = "B".$number;

$query2 = mysqli_query($koneksi, "SELECT * FROM antrian_internal");
$lastid2 = mysqli_num_rows($query2);
$row2 = $lastid2+1;
$no = str_pad($row2, 3, "0",STR_PAD_LEFT);
$kodeinternal = "C".$no;
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
    <!-- <link rel="canonical" href="http://example.com/" /> -->

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/vanillatop.min.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">
  <!--   <script defer="" src="fontawesome/js/all.js"></script>
 -->

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

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
                        <a class="logo-text custom-text-head" href="../index.php">SIAKLIK<br><span class="span-logo" style="color:white;">SISTEM PELAYANAN KLINIK KESEHATAN</span></a>
                    </li>
                    <?php
                        if(isset($_SESSION['level']) && $_SESSION['level'] == "admin"): ?> 
				            <p class="mb-0"><i class="fas fa-circle online-s"></i>Pekerja Klinik</p>
                        <?php else: ?>
                            <p class="mb-0"><i class="online-P fas fa-circle"></i>Pasien Klinik</p>
                        <?php endif; ?>
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
                            <a href="../assets/pdf/HIV.pdf"><i class="fas fa-bookmark"></i>HIV / AIDS</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/stroke.pdf"><i class="fas fa-bookmark"></i>STROKE</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/tuberkulosis.pdf"><i class="fas fa-bookmark"></i>TBC / TUBERKULOSIS</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/hepatitis.pdf"><i class="fas fa-bookmark"></i>HEPATITIS</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/diare.pdf"><i class="fas fa-bookmark"></i>DIARE</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/pneumonia.pdf"><i class="fas fa-bookmark"></i>PENEUMONIA</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/difteri.pdf"><i class="fas fa-bookmark"></i>DIFTERI</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/dbd.pdf"><i class="fas fa-bookmark"></i>DBD / DEMAM BERDARAH DENGUE</a>
                        </li>
                        <li>
                            <a href="../assets/pdf/kanker.pdf"><i class="fas fa-bookmark"></i>KANKER</a>
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
                                    <a class="dropdown-item custom-dropdown" href="../index.php?#about" target="_blank"><i class="fas fa-info-circle"></i>Tentang Poliklinik</a>
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
                <div class="custom-header mt-4">
                <h4 align="center"><i class="fas fa-users" style="color: "></i>PILIH DAFTAR ANTRIAN PASIEN</h4>
                </div>
                <hr class="solid">

            	<!-- Pendaftaran -->
            	<section class="pendaftaran">

            		<!-- Form BPJS -->
    				<div class="modal fade" id="antri_bpjs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        				<div class="modal-dialog" role="document">
            				<div class="modal-content">
                				<div class="bpjs modal-header">
                    				<h5 class="modal-title" id="exampleModalLabel"><b>ANTRIAN BPJS</b></h5>
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        				<span aria-hidden="true">&times;</span>
                    				</button>
                				</div>

                			<form action="../cruds/input_bpjs.php" method="POST">
                    			<div class="modal-body">
                        			<div class="form-group">
                        				<div class="keterangan" align="center">
                                            <?php  ?>
                            				<h5>Disini anda mengantri sebagai Pasien BPJS</h5>
                            				<p>Dengan rincian :</p>
                            			</div>
                        			</div><br>
                        			<table id="datatableid" class="table table-bordered">
                        				<tr class="tr_bpjs bg-primary">
            									<th scope="col">KODE BPJS</th>
            							</tr>
            							<tbody>
            								<tr>
                    							<td> <input style="text-align: center; font-weight: bolder;" type="text" name="kode" value="<?php echo $kodebpjs ?>" readonly required="required"></td>
                    						</tr>
                    					</tbody>
                    				</table>
                                    </table>
                                    <table id="datatableid" class="table table-bordered">
                                        <tr class="tr_intern bg-success">
                                            <th scope="col">NAMA LENGKAP</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input style="text-align: center;" type="text" name="nama"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                				</div>
      
                				<div class="modal-footer">
                    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    				<button type="submit" value="Submit" name="insertdata" id="insertdata" class="btn btn-primary">Setuju & Lanjutkan</button>
                				</div>
                			</form>
            			</div>
        			</div>
    			</div>

    			<!-- Form UMUM -->
    				<div class="modal fade" id="antri_umum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        				<div class="modal-dialog" role="document">
            				<div class="modal-content">
                				<div class="umum modal-header">
                    				<h5 class="modal-title" id="exampleModalLabel"><b>ANTRIAN UMUM</b></h5>
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        				<span aria-hidden="true">&times;</span>
                    				</button>
                				</div>

                			<form action="../cruds/input_umum.php" method="POST">
                    			<div class="modal-body">
                        			<div class="form-group">
                        				<div class="keterangan" align="center">
                            				<h5>Disini anda mengantri sebagai Pasien UMUM</h5>
                            				<p>Dengan rincian :</p>
                            			</div>
                        			</div><br>
                        			<table id="datatableid" class="table table-bordered">
        								<tr class="tr_umum bg-info">
            								<th scope="col">KODE UMUM</th>
            							</tr>
            							<tbody>
            								<tr>
                    							<td><input  style="text-align: center; font-weight: bolder;" type="text" name="kode2" value="<?php echo $kodeumum ?>" readonly required="required"></td>
                    						</tr>
                    					</tbody>
                    				</table>
                                    </table>
                                    <table id="datatableid" class="table table-bordered">
                                        <tr class="tr_intern bg-success">
                                            <th scope="col">NAMA LENGKAP</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input style="text-align: center;" type="text" name="nama2"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                				</div>
                
                				<div class="modal-footer">
                    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    				<button type="submit" value="Submit" name="insertdata" id="insertdata" class="btn btn-info">Setuju & Lanjutkan</button>
                				</div>
                			</form>
            			</div>
        			</div>
    			</div>


    			<!-- Form INTERN -->
    				<div class="modal fade" id="antri_intern" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        				<div class="modal-dialog" role="document">
            				<div class="modal-content">
                				<div class="intern modal-header">
                    				<h5 class="modal-title" id="exampleModalLabel"><b>ANTRIAN INTERN</b></h5>
                    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        				<span aria-hidden="true">&times;</span>
                    				</button>
                				</div>

                			<form action="../cruds/input_intern.php" method="POST">
                    			<div class="modal-body">
                        			<div class="form-group">
                        				<div class="keterangan" align="center">
                            				<h5>Disini anda mengantri sebagai Pasien INTERN</h5>
                            				<p>Dengan rincian :</p>
                            			</div>
                        			</div><br>
                        			<table id="datatableid" class="table table-bordered">
        								<tr class="tr_intern bg-success">
            								<th scope="col">KODE INTERN</th>
            							</tr>
            							<tbody>
            								<tr>
                    							<td><input style="text-align: center; font-weight: bolder;" type="text" name="kode3" value="<?php echo $kodeinternal ?>" readonly required="required"></td>
                    						</tr>
                    					</tbody>
                    				</table>
                                    <table id="datatableid" class="table table-bordered">
                                        <tr class="tr_intern bg-success">
                                            <th scope="col">NAMA LENGKAP</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input style="text-align: center;" type="text" name="nama3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                				</div>
                
                				<div class="modal-footer">
                    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    				<button type="submit" value="Submit" name="insertdata" id="insertdata" class="btn btn-success">Setuju & Lanjutkan</button>
                				</div>
                			</form>
            			</div>
        			</div>
    			</div>

            		<div class="container-fluid">
                        <div class="row" style="margin:0 auto;">
                            <div class="wrap col-xl-3">
                                <a href="#antri_bpjs" data-toggle="modal"><div class="card bg-primary text-white mb-4">
                                    <div class="card-body" style="line-height:80px;text-align:center;font-weight:bold;">ANTRIAN BPJS</div>
                                </div></a>
                            </div>
                            <div class="wrap col-xl-3">
                                <a href="#antri_umum" data-toggle="modal"><div class="card bg-info text-white mb-4">
                                    <div class="card-body" style="line-height:80px;text-align:center;font-weight:bold;">ANTRIAN UMUM</div>
                                </div></a>
                            </div>
                            <div class="wrap col-xl-3">
                                <a href="#antri_intern" data-toggle="modal"><div class="card bg-success text-white mb-4">
                                    <div class="card-body" style="line-height:80px;text-align:center;font-weight:bold;">ANTRIAN INTERN</div>
                                </div></a>
                            </div>
                        </div>
                        <style>
                        	.wrap{
                        		margin: 0 auto;
                        	}
                        	.card-body:hover{
                        		background-color:#00ffa2;
                        		color:#144a36;
                        	}
                        	.bpjs{
                        		 background-color:#007bff;
                        		 color:white;
                        	}
                        	.umum{
                        		 background-color:#17a2b8;
                        		 color:white;
                        	}
                        	.intern{
                        		 background-color:#28a745;
                        		 color:white;
                        	}
                        	tr{
                        		border:5px solid black;
                        		text-align:center;
                        	}
                        	.tr_bpjs{
                        		color:white;
                        	}
                        	.tr_umum{
                        		color:white;
                        	}
                        	.tr_intern{
                        		color:white;
                        	}
                        </style>
                    </div>
                </section><br><br>
            </main>
            <!-- End of Main -->

            <!-- Antrian Pasien BPJS -->
            <!-- body --> 
            <main>
                <section class="table-wrap">

                <!-- Content Header -->     
                <div class="custom-header about-header" align="center">
                    <h4 align="center"><i class="fa fa-book"></i>&nbsp;DATA ANTRIAN PASIEN</h4>
                </div><hr><br>
                <p style="text-align: center;"> <i class="fas fa-user-friends"></i><b>&nbsp;ANTRIAN PASIEN BPJS</b></p>
                    <nav class="bg-light">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="input-group">
                                
                            </div>
                            <div class="input-group">
                                <a href="../poli/antrian.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-sync" aria-hidden="true"></i></button>
                                </a>&nbsp;&nbsp;
                                <form class="form-inline" action="" method="POST">
                                    <div class="input-group-prepend">
                                        <input class="form-control mr-sm-2" type="text" name="inputsrdata" placeholder="Cari data..." value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
                                        <button class="btn btn-primary" type="submit" name="searchdata" id="searchdata"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                    
            <div class="table-responsive">
                <?php 
                include '../config/koneksi.php';
                     //untuk menentukan berapa limit data yang akan di tampilkan dan halaman utama yang aktif
                    $per_page = 5;
                    $page = 1;
 
                    // digunakan untuk memproses link yang ada pada tombol pagination kita mengget link paging
                    if(isset($_GET['link'])){
                        $page=$_GET['link'];
                        $page=($page>1) ? $page : 1;
                    }

                    //count seluruh data pada tabel pasien
                    $query = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM antrian_bpjs"));
        
                    //untuk mendapatkan jumlah halaman
                    $total_page=ceil($query/$per_page);
                    $offset=($page-1)*$per_page;
 
                    //mengambil seluruh data pada tabel pasien buat di tampilkan pada tabel
                    $query_page = mysqli_query($koneksi, "SELECT * FROM antrian_bpjs LIMIT $per_page OFFSET $offset")or die(mysql_error());
                ?>

                <table id="datatableid" class="table table-bordered" style="width:100%">
                    <thread>
                    <tr>
                        <th scope="col" style="padding:10px;">ID</th>
                        <th scope="col" style="padding:10px;">KODE ANTRIAN</th>
                        <th scope="col" style="padding:10px;">NAMA</th>
                        
                    </tr>
                    </thead>
    
                    <tbody>
                    <?php 
                        $inputsrdata = @$_POST['inputsrdata'];
                        if(isset($_POST['searchdata'])){
                            if($inputsrdata != ""){
                                $query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs WHERE id_antrian like '%".$inputsrdata."%' OR kode_antrian like '%".$inputsrdata."%' OR nama_pasien like '%".$inputsrdata."%'") OR die(mysql_error());
                                 while ($row = mysqli_fetch_object($query_search)) {
                    ?>
                    <tr>
                        <td><?= $row->id_antrian; ?></td>
                        <td><?= $row->kode_antrian; ?></td>
                        <td><?= $row->nama_pasien; ?></td>
                    </tr>
                    <?php }

                    }else{
                        $query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs") OR die(mysql_error());
                    }
                    }else{
                        $query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs") OR die(mysql_error());
                    }
                    
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
                        <td scope="row" style="padding:5px;"> <?php echo $row['id_antrian']; ?> </td>
                        <td data-label="kode_antrian" style="padding:5px;"> <?php echo $row['kode_antrian']; ?>
                        <td data-label="nama_pasien" style="padding:5px;"> <?php echo $row['nama_pasien']; ?> </td>
                         </td>
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
                                <?php
                                    $jumlah = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM antrian_bpjs"));
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
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link=<?php echo $page-1; ?>"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                                </div>
                            &nbsp;&nbsp;
                            <?php }
                                if($page<$total_page) { ?>

                                <div class="right">
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link=<?php echo $page+1; ?>">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
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

            <!-- Antrian Pasien Umum -->
            <!-- body -->
            <main>
                <section class="table-wrap">

                <p style="text-align: center;"> <i class="fas fa-user-friends"></i><b>&nbsp;ANTRIAN PASIEN UMUM</b></p>
                    <nav class="bg-light">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="input-group">
                                
                            </div>
                            <div class="input-group">
                                <a href="../poli/antrian.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-sync" aria-hidden="true"></i></button>
                                </a>&nbsp;&nbsp;
                                <form class="form-inline" action="" method="POST">
                                    <div class="input-group-prepend">
                                        <input class="form-control mr-sm-2" type="text" name="inputsrdata1" placeholder="Cari data..." value="<?php if(isset($_GET['kata_cari1'])) { echo $_GET['kata_cari1']; } ?>"  />
                                        <button class="btn btn-primary" type="submit" name="searchdata1" id="searchdata1"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                    
            <div class="table-responsive">
                <?php 
                     //untuk menentukan berapa limit data yang akan di tampilkan dan halaman utama yang aktif
                    $per_page = 5;
                    $page = 1;
 
                    // digunakan untuk memproses link yang ada pada tombol pagination kita mengget link paging
                    if(isset($_GET['link1'])){
                        $page=$_GET['link1'];
                        $page=($page>1) ? $page : 1;
                    }

                    //count seluruh data pada tabel pasien
                    $query = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM antrian_umum"));
        
                    //untuk mendapatkan jumlah halaman
                    $total_page=ceil($query/$per_page);
                    $offset=($page-1)*$per_page;
 
                    //mengambil seluruh data pada tabel pasien buat di tampilkan pada tabel
                    $query_page = mysqli_query($koneksi, "SELECT * FROM antrian_umum LIMIT $per_page OFFSET $offset")or die(mysql_error());
                ?>

                <table id="datatableid" class="table table-bordered" style="width:100%">
                    <thread>
                    <tr>
                        <th scope="col" style="padding:10px;">ID</th>
                        <th scope="col" style="padding:10px;">KODE ANTRIAN</th>
                        <th scope="col" style="padding:10px;">NAMA</th>
                        
                    </tr>
                    </thead>
    
                    <tbody>
                    <?php include '../config/koneksi.php'; ?>

                    <?php
                        $inputsrdata1 = @$_POST['inputsrdata1'];
                        if(isset($_POST['searchdata1'])){
                            if($inputsrdata1 != ""){
                                $query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_umum WHERE id_antrian like '%".$inputsrdata1."%' OR kode_antrian like '%".$inputsrdata1."%' OR nama_pasien like '%".$inputsrdata1."%'") OR die(mysql_error());
                                 while ($row = mysqli_fetch_object($query_search1)) {
                    ?>
                    <tr>
                        <td><?= $row->id_antrian; ?></td>
                        <td><?= $row->kode_antrian; ?></td>
                        <td><?= $row->nama_pasien; ?></td>
                    </tr>
                    <?php }

                    }else{
                        $query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
                    }
                    }else{
                        $query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
                    }
                        $cek = mysqli_num_rows($query_search1);
                        if($cek < 1){
                    ?>
                    <tr>
                        <td colspan="11" align="center" style="padding:10px;">Data tidak ditemukan..</td>
                    </tr>
            
                    <?php
                        }else{
                            while($row = mysqli_fetch_array($query_search1)) {
                    ?>

                    <?php  while($row = mysqli_fetch_array($query_page)){ ?>
                    <tr>
                        <td scope="row" style="padding:5px;"> <?php echo $row['id_antrian']; ?> </td>
                        <td data-label="kode_antrian" style="padding:5px;"> <?php echo $row['kode_antrian']; ?>
                        <td data-label="nama_pasien" style="padding:5px;"> <?php echo $row['nama_pasien']; ?> </td>
                         </td>
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
                                <?php
                                    $jumlah = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM antrian_umum"));
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
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link1=<?php echo $page-1; ?>"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                                </div>
                            &nbsp;&nbsp;
                            <?php }
                                if($page<$total_page) { ?>

                                <div class="right">
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link1=<?php echo $page+1; ?>">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
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

    <!-- Antrian Pasien Internal -->
            <!-- body -->
            <main>
                <section class="table-wrap">

                <p style="text-align: center;"> <i class="fas fa-user-friends"></i><b>&nbsp;ANTRIAN PASIEN INTERN</b></p>
                    <nav class="bg-light">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="input-group">   
                            </div>
                            <div class="input-group">
                                <a href="../poli/antrian.php">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-sync" aria-hidden="true"></i></button>
                                </a>&nbsp;&nbsp;
                                <form class="form-inline" action="" method="POST">
                                    <div class="input-group-prepend">
                                        <input class="form-control mr-sm-2" type="text" name="inputsrdata2" placeholder="Cari data..." value="<?php if(isset($_GET['kata_cari2'])) { echo $_GET['kata_cari2']; } ?>"  />
                                        <button class="btn btn-primary" type="submit" name="searchdata2" id="searchdata2"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                    
            <div class="table-responsive">
                <?php
                     //untuk menentukan berapa limit data yang akan di tampilkan dan halaman utama yang aktif
                     $per_page = 5;
                    $page = 1;
 
                    // digunakan untuk memproses link yang ada pada tombol pagination kita mengget link paging
                    if(isset($_GET['link2'])){
                        $page=$_GET['link2'];
                        $page=($page>1) ? $page : 1;
                    }

                    //count seluruh data pada tabel pasien
                    $query = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM antrian_internal"));
        
                    //untuk mendapatkan jumlah halaman
                    $total_page=ceil($query/$per_page);
                    $offset=($page-1)*$per_page;
 
                    //mengambil seluruh data pada tabel pasien buat di tampilkan pada tabel
                    $query_page = mysqli_query($koneksi, "SELECT * FROM antrian_internal LIMIT $per_page OFFSET $offset")or die(mysql_error());
                ?>

                <table id="datatableid" class="table table-bordered" style="width:100%">
                    <thread>
                    <tr>
                        <th scope="col" style="padding:10px;">ID</th>
                        <th scope="col" style="padding:10px;">KODE ANTRIAN</th>
                        <th scope="col" style="padding:10px;">NAMA</th>
                        
                    </tr>
                    </thead>
    
                    <tbody>
                    <?php include '../config/koneksi.php'; ?>

                    <?php
                        $inputsrdata2 = @$_POST['inputsrdata2'];
                        if(isset($_POST['searchdata2'])){
                            if($inputsrdata2 != ""){
                                $query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal WHERE id_antrian like '%".$inputsrdata2."%' OR kode_antrian like '%".$inputsrdata2."%' OR nama_pasien like '%".$inputsrdata2."%'") OR die(mysql_error());
                                 while ($row = mysqli_fetch_object($query_search2)) {
                    ?>
                    <tr>
                        <td><?= $row->id_antrian; ?></td>
                        <td><?= $row->kode_antrian; ?></td>
                        <td><?= $row->nama_pasien; ?></td>
                    </tr>
                    <?php }

                    }else{
                        $query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
                    }
                    }else{
                        $query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
                    }
                    
                        $cek = mysqli_num_rows($query_search2);
                        if($cek < 1){
                    ?>
                    <tr>
                        <td colspan="11" align="center" style="padding:10px;">Data tidak ditemukan..</td>
                    </tr>
            
                    <?php
                        }else{
                            while($row = mysqli_fetch_array($query_search2)) {
                    ?>

                    <?php  while($row = mysqli_fetch_array($query_page)){ ?>
                    <tr>
                        <td scope="row" style="padding:5px;"> <?php echo $row['id_antrian']; ?> </td>
                        <td data-label="kode_antrian" style="padding:5px;"> <?php echo $row['kode_antrian'];?></td> 
                        <td data-label="nama_pasien" style="padding:5px;"> <?php echo $row['nama_pasien']; ?> </td>
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
                                <?php
                                    $jumlah = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM antrian_internal"));
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
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link2=<?php echo $page-1; ?>"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                                </div>
                            &nbsp;&nbsp;
                            <?php }
                                if($page<$total_page) { ?>

                                <div class="right">
                                    <a class="btn-page btn btn-success" href="../poli/antrian.php?link2=<?php echo $page+1; ?>">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
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

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/updatedata.js"></script>
    <script src="../assets/js/deletedata.js"></script>
    <script src="../assets/js/side-scroll.js"></script>
</body>
</html>