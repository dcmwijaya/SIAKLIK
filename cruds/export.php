<?php
include('../config/koneksi.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT * FROM tabel_pasien") OR die(mysql_error());
$html = '<html><head></head><body>
    <center style="font-family: Arial, Helvetica, sans-serif;">
    <div class="copyright">
        <a href="https://siaklik.000webhostapp.com/" style="text-decoration:none;"><img src="../assets/images/logo.png" height="25" width="25" style="float:left;margin-top:1px;"><p style="float:left;font-weight:bold;font-size:8px;margin-left:35px;">Klinik Siaklik</p>
        </a>
    </div>
    <div class="title">
        <h2>DATA PASIEN</h2>
        <p>Kelola Data Pasien Klinik Siaklik</p>
    </div>
    </center>
    <hr><br>';
$html .= '<table width="100%">
        <tr style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;" align="center">
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">ID</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">NAMA</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">UMUR</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">ALAMAT</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">PEKERJAAN</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">STATUS</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">KELAMIN</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">NIP/NRP</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">NO BPJS</th>
            <th scope="col" style="padding:10px;font-size:.85em;letter-spacing:.1em;text-transform:uppercase;background:#639c1f;color:white;">KETERANGAN</th>
        </tr>';
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr>
        <td scope='row' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['id_pasien']."</td>
        <td data-label='nama' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['nama_pasien']."</td>
        <td data-label='umur' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['umur_pasien']."</td>
        <td data-label='alamat' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['alamat_pasien']."</td>
        <td data-label='pekerjaan' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['pekerjaan_pasien']."</td>
        <td data-label='status' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['status_pasien']."</td>
        <td data-label='jk' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['jenis_kelamin']."</td>
        <td data-label='nip' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['nip_pasien']."</td>
        <td data-label='bpjs' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['no_bpjs']."</td>
        <td data-label='keterangan' style='padding:5px;background:#8cc3ff;border:1px solid green;padding:.35em;'>".$row['keterangan']."</td>
    </tr>";
}

$count = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tabel_pasien"));
$html .= "<p>Jumlah data pasien : <b>".$count."</b></p>";

date_default_timezone_set('Asia/Jakarta');
$html .= "<p>Date : <b>".date('l, d F Y')."</b></p>";

$html .= "</body></html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('data_pasien_poliupn.pdf');

?>