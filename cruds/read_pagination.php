<?php include '../config/koneksi.php';

    //untuk menentukan berapa limit data yang akan di tampilkan dan halaman utama yang aktif
    $per_page = 5;
    $page = 1;
 
    // digunakan untuk memproses link yang ada pada tombol pagination kita mengget link paging
    if(isset($_GET['link'])){
        $page=$_GET['link'];
        $page=($page>1) ? $page : 1;
    }

    //count seluruh data pada tabel pasien
    $query = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tabel_pasien"));
        
    //untuk mendapatkan jumlah halaman
    $total_page=ceil($query/$per_page);
    $offset=($page-1)*$per_page;
 
    //mengambil seluruh data pada tabel pasien buat di tampilkan pada tabel
    $query_page = mysqli_query($koneksi, "SELECT * FROM tabel_pasien LIMIT $per_page OFFSET $offset")or die(mysql_error());


?>