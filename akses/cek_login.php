<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

if(isset($_POST['patient-submit'])){
	$_SESSION['patient-submit']='';


//code for captach verification
  if ($_POST["kode"] != $_SESSION["kodepasien"] OR $_SESSION["kodepasien"]=='')  {
	
  	// menangkap data yang dikirim dari form login
$email = $_POST['patient-email'];
$secretpassword = $_POST['patient-password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from akun_pasien where email_pasien='$email'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if(password_verify($secretpassword, $data['password_pasien'])){
 
		// buat session login dan username
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard admin
		header("location:../poli/antrian.php");
	}
	else{
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=salah");
	}	
}else{
	header("location:../index.php?pesan=salah");
}
  }
  else{
	header("location:../index.php?pesan=gagal");
  }
}
else if(isset($_POST['klinik-submit'])){
	$_SESSION['klinik-submit']='';


//code for captach verification
  if ($_POST["kode"] != $_SESSION["kodeadmin"] OR $_SESSION["kodeadmin"]=='')  {
  	header("location:../index.php?pesan=gagal");
  }

  else{
  	// menangkap data yang dikirim dari form login
$email = $_POST['klinik-email'];
$secretpassword = $_POST['klinik-password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from pekerja_klinik where email_klinik='$email'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if(password_verify($secretpassword, $data['password_klinik'])){
 
		// buat session login dan username
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../menu_klinik.php");
	}
	else{
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=salah");
	}	
}else{
	header("location:../index.php?pesan=error");
}
  }
}
 


 

 
?>