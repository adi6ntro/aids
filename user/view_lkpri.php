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
				<h2>LEMBAR KEGIATAN PENILAIAN RISIKO INDIVIDU</h2>
                <p><i>( Harus dilengkapi oleh konselor. Termasuk dalam HO11. )</i></p>
				<!--<a href="http://officialitoru.blogspot.com/2013/03/crud-sederhana-dengan-php-dan-bootstrap.html" class="btn btn-info btn-large"><i class="icon icon-hand-right"></i> Selengkapnya </a>
				<a href="#" class="btn btn-success btn-large"><i class="icon icon-download"></i> Download </a>-->
			<!-- </div> -->

	<hr />

<table class="table table-bordered table-striped">
    <?php
        $query="SELECT * FROM data_pasien where id_pasien='1'";
        $query_page="SELECT nama_pasien FROM data_pasien";
        
        $result=mysql_query($query) or die(mysql_error());
        while($rows=mysql_fetch_array($result)){

    ?>
    <tr>
        <td></td>
        <td><b>KODE KLIEN : </b><?php echo " ".$rows['kode_klien']; ?></td>
    <tr>
    <td>1.</td>
    <td>Klien mempunyai pasangan tetap :</td>
    <td><?php echo " ".$rows['punya_pasangan']; ?></td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Status Pasangan Tetap :</td>
    <td><?php echo " ".$rows['status_pasangan']; ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Tanggal terakhir tes darah :</td>
    <td><?php echo " ".$rows['tanggal_tesdarah']; ?></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Klien / pasangannya terindikasi riwayat Infeksi Menular Seksual (IMS) :</td>
    <td><?php echo " ".$rows['indikasi_pasangan_ims']; ?></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Dibutuhkan terapi rujukan :</td>
    <td><?php echo " ".$rows['terapi_rujukan_ims']; ?></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Klien / pasangannya melaporkan gejala TB :</td>
    <td><?php echo " ".$rows['gejala_tb']; ?></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Dibutuhkan terapi rujukan :</td>
    <td><?php echo " ".$rows['terapi_rujukan_tb']; ?></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Pajanan di tempat kerja :</td>
    <td><?php echo " ".$rows['pajanan_tpt_kerja']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_pajanan']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_pajanan']; ?></td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Tatoo, luka gores :</td>
    <td><?php echo " ".$rows['tato_luka']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_tato']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_tato']; ?></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Produk darah :</td>
    <td><?php echo " ".$rows['produk_darah']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_produk_darah']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_produk_darah']; ?></td>  </tr>
  <tr>
    <td>11.</td>
    <td>Seks Vaginal :</td>
    <td><?php echo " ".$rows['seks_vagina']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_vagina']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_vagina']; ?></td>  </tr>
  <tr>
    <td>12.</td>
    <td>Seks Oral :</td>
    <td><?php echo " ".$rows['seks_oral']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_oral']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_oral']; ?></td>  </tr>
  <tr>
    <td>13.</td>
    <td>Seks Anal :</td>
    <td><?php echo " ".$rows['seks_anal']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_anal']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_anal']; ?></td>  </tr>
  <tr>
    <td>14.</td>
    <td>Bergantian alat suntik :</td>
    <td><?php echo " ".$rows['ganti_suntik']; ?></td>
    <td>Tanggal :</td>
    <td><?php echo " ".$rows['tgl_suntik']; ?></td>
    <td>Periode Jendela :</td>
    <td><?php echo " ".$rows['jend_suntik']; ?></td>  </tr>
  <tr>
    <td>15.</td>
    <td>Diketahui klien berisiko dengan ODHA :</td>
    <td><?php echo " ".$rows['risk_odha']; ?></td>
  </tr>
  <tr>
    <td>16.</td>
    <td>Klien hamil :</td>
    <td><?php echo " ".$rows['pasien_hamil']; ?></td>
  </tr>
  <tr>
    <td>17.</td>
    <td>Tahap kehamilan :</td>
    <td><?php echo " ".$rows['tahap_hamil']; ?></td>
  </tr>
  <tr>
    <td>18.</td>
    <td>Klien atau pasangan menggunakan kontrasepsi secara teratur :</td>
    <td><?php echo " ".$rows['kontrasepsi_teratur']; ?></td>
  </tr>
  </table>
    
        <p>Klien perlu tes saat ini : <?php echo " ".$rows['perlu_tes']; ?></p>
    
    
        <p>Klien membutuhkan tes ulang karena pajanan dalam masa jendela : <?php echo " ".$rows['tesulang_jend']; ?></td>
    </p>
    
    <br>
    <br>
    <p>Tanggal tes pertama / sekarang : <?php echo " ".$rows['tgl_tes_pertama']; ?></td>
    </p>





  
  <?php
	}
	?>
    
</div>
