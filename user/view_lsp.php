 <?php
// INCLUDE KONEKSI
require_once '../inc/config.php';
// END OF INCLUDE KONEKSI

//INCLUDE TEMPLATE YANG BERISI FILE bootstrap
include '../template/header.php';
//END OF INCLUDE FILE bootstrap
?>

<div class="container">
			<!-- <div class="hero-unit"> -->
				<h2>Lembar Status Pasien</h2>
				<!--<a href="http://officialitoru.blogspot.com/2013/03/crud-sederhana-dengan-php-dan-bootstrap.html" class="btn btn-info btn-large"><i class="icon icon-hand-right"></i> Selengkapnya </a>
				<a href="#" class="btn btn-success btn-large"><i class="icon icon-download"></i> Download </a>-->
			<!-- </div> -->

	<hr />

<table class="table table-bordered table-striped">
    <?php
    	$id_pasien = $_GET['id_pasien'];

        $query="SELECT * FROM data_pasien where id_pasien='".$id_pasien."'";
        $query_page="SELECT nama_pasien FROM data_pasien";
        
        $result=mysql_query($query) or die(mysql_error());
        while($rows=mysql_fetch_array($result)){

    ?>
    <tr>
    <td><b>Konselor</b></td>
    <td><?php echo ":"." ".$rows['konselor_pasien']; ?></td>
    <td><b>Tanggal Konseling</b></td>
    <td><?php echo ":"." ".$rows['tgl_konseling']; ?></td>
  </tr>
  <tr>
    <td><b>Nama</b></td>
    <td><?php echo ":"." ".$rows['nama_pasien']; ?></td>
    <td><b>Umur</b></td>
    <td><?php echo ":"." ".$rows['umur_pasien']; ?></td>
    <td><b>TTL</b></td>
    <td><?php echo ":"." ".$rows['ttl_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Alamat</b></td>
    <td><?php echo ":"." ".$rows['alamat_pasien']; ?></td>
    <td><b>No Tlp</b></td>
    <td><?php echo ":"." ".$rows['notelp_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Jenis Kelamin</b></td>
    <td><?php echo ":"." ".$rows['kelamin_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Alasan ingin tes</b></td>
    <td><?php echo ":"." ".$rows['alasan_tes']; ?></td>
  </tr>
  <tr>
    <td><b>Tahu adanya VCT dari</b></td>
    <td><?php echo ":"." ".$rows['tahu_vct']; ?></td>
  </tr>
  <tr>
    <td><b>Pertama kali dengar HIV/AIDS</b></td>
    <td><?php echo ":"." "."Tahun"." ".$rows['dengar_hiv']; ?></td>
    <td><b>Dari</b></td>
    <td><?php echo ":"." ".$rows['dengar_dari']; ?></td>
  </tr>
  <tr>
    <td><b>Pengetahuan tentang HIV/AIDS</b></td>
    <td><?php echo ":"." ".$rows['pengetahuan_hiv']; ?></td>
  </tr>
  <tr>
    <td><b>Risiko Penularan</b></td>
    <td><?php echo ":"." ".$rows['risk_penularan']; ?></td>
  </tr>
  <tr>
    <td><b>Pasangan sex</b></td>
    <td><?php echo ":"." ".$rows['pasangan_sex']; ?></td>
    <td><b>Kelamin Pasangan</b></td>
    <td><?php echo ":"." ".$rows['kelamin_pasangan']; ?></td>
  </tr>
  <tr>
    <td><b>Terakhir Berisiko</b></td>
    <td><?php echo ":"." ".$rows['terakhir_risk']; ?></td>
  </tr>
  <tr>
    <td><b>Suku Bangsa</b></td>
    <td><?php echo ":"." ".$rows['suku_bangsa']; ?></td>
  </tr>
  <tr>
    <td><b>Agama</b></td>
    <td><?php echo ":"." ".$rows['agama_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Status Perkawinan</b></td>
    <td><?php echo ":"." ".$rows['status_perkawinan']; ?></td>
  </tr>
  <tr>
    <td><b>Pendidikan Terakhir</b></td>
    <td><?php echo ":"." ".$rows['pendidikan_terakhir']; ?></td>
  </tr>
  <tr>
    <td><b>Pekerjaan</b></td>
    <td><?php echo ":"." ".$rows['pekerjaan_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Tindak Lanjut</b></td>
    <td><?php echo ":"." ".$rows['tindak_lanjut']; ?></td>
  </tr>
  <tr>
    <td><b>Lama Konseling</b></td>
    <td><?php echo ":"." ".$rows['lama_konseling']; ?></td>
  </tr>
  <tr>
    <td><b>Kesimpulan Status Risiko</b></td>
    <td><?php echo ":"." ".$rows['status_risk']; ?></td>
  </tr>
  <tr>
    <td><b>Keluhan yang dirasakan saat ini</b></td>
    <td><?php echo ":"." ".$rows['keluhan_pasien']; ?></td>
  </tr>
  <tr>
    <td><b>Situasi dan Kondisi saat Konseling</b></td>
    <td><?php echo ":"." ".$rows['situasi_konseling']; ?></td>
  </tr>
  
  <?php
	}
	?>
    
</table>
</div>
