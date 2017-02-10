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
				<h2>Data Master Pasien</h2>
				<!--<a href="http://officialitoru.blogspot.com/2013/03/crud-sederhana-dengan-php-dan-bootstrap.html" class="btn btn-info btn-large"><i class="icon icon-hand-right"></i> Selengkapnya </a>
				<a href="#" class="btn btn-success btn-large"><i class="icon icon-download"></i> Download </a>-->
			<!-- </div> -->
</div>

	<hr />

	<div class="container">
			<!-- <legend>
				CRUD PHP & Bootstrap
			</legend> -->
			<!-- MENAMBAHKAN FORM UNTUK PENCARIAN BERDASARKAN username -->
			<form name="user_form_search" action="" method="post" class="form-search">
				<input type="text" name="nama_pasien" placeholder="Masukkan Nama Pasien"/>
				<>
				<a href='' class="btn btn-primary" ><i class='icon-list'></i>Search</a>
			</form>
			<!-- END OF FORM PENCARIAN -->

<!-- MENAMBAHKAN KONFIRMASI JIKA UPDATE DATA BERHASIL -->
<?

?>
<!-- END OF KONFIRMASI UPDATE DATA -->

<table class="table table-bordered table-striped">
	<tr>
		<th><center>No</center></th>
		<th><center>Nama</center></th>
		<th><center>Alamat</center></th>
		<th><center>Jenis Kelamin</center></th>
		<th><center>Kuisioner</center></th>
		<th><center>Laporan</center></th>
		<th><center>Actions</center></th>
	</tr>

	<?php
error_reporting(0);
$batas=5;
$halaman=$_GET['halaman'];
$posisi=null;

if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}
/*
	$query="SELECT * FROM data_pasien  ORDER BY id_pasien LIMIT $posisi,$batas";
	$query_page="SELECT nama_pasien FROM data_pasien";
*/
if(isset($_POST['nama_pasien'])&&!empty($_POST['nama_pasien'])){
	$nama_pasien=$_POST['nama_pasien'];
	$query="SELECT * FROM data_pasien WHERE nama_pasien LIKE '%$nama_pasien%' or alamat_pasien LIKE '%$nama_pasien%'";
	$query_page="SELECT nama_pasien FROM data_pasien WHERE nama_pasien LIKE '%$nama_pasien%' or alamat_pasien LIKE '%$nama_pasien%'";

$result=mysql_query($query) or die(mysql_error());
$no=0;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
#print_r($rows);
			?>

	<tr>
		<!-- <td><?php echo $no++; ?></td> -->
		<td><?php echo $no+$posisi; ?></td>
		<td><?php echo $rows['nama_pasien']; ?></td>
		<td><?php echo $rows['alamat_pasien']; ?></td>
		<td><?php echo $rows['kelamin_pasien']; ?></td>
		<td align="center">
				<a href="question4.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">
				<i class="icon icon-pencil"></i>Question Kepribadian</a>
				<a href="question1.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">
				<i class="icon icon-pencil"></i>Question GKA-SOSIAL</a>
				<a href="question3.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">
				<i class="icon icon-pencil"></i>Question BORDERLINE</a>
		</td>
		<td>
				<a href="view_lsp.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning">Status Pasien</i></a>
				<a href="view_lkpri.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning">Penilaian Risiko</a>
				<a href="hasil_questioner.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">Hasil Question Kepribadian</a>
				<a href="hasil_questioner2.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">Hasil Question GKA-SOSIAL</a>
				<a href="hasil_questioner3.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">Hasil BORDERLINE</a>
				<a href="hitung_bayes_anti_sosial.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">Hitungan Bayes Anti Sosial</a>
				<a href="hitung_bayes_borderline.php?id_pasien=<?php echo $rows['id_pasien']; ?>" class="btn btn-warning" id="modaltrigger">Hitungan Bayes Anti Borderline</a>
		</td>
		<td>
				<a href="user_form_edit.php?id_pasien=<?php echo $rows['id_pasien']; ?>"
				onclick="return confirm('Apakah anda yakin akan mengedit data ini?')" class="btn btn-success">
				<i class="icon icon-pencil"></i>EDIT</a>
				<a href="user_act_delete.php?id_pasien=<?php echo $rows['id_pasien']; ?>"
				onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">
				<i class="icon icon-trash"></i>HAPUS</a>
		</td>
	</tr>

	<?php
}}
	?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	<td colspan="4"><a href="user_form_insert.php" class="btn  btn-success">Tambah Data</a></td>
	</tr>
</table>

<div id="pilihupdate" style="display:none;">
    <p style="text-align:center;">Pilih Update</p>
    <div class="center">
   	 <a href="view_lsp.php" class="btn btn-warning">Status Pasien</i></a>
   	 <a href="view_lkpri.php" class="btn btn-warning">Penilaian Risiko</a>
   	 <a href="#pilihupdate" class="btn btn-warning">Hasil Lab</a>
   	 <a href="question1.php" class="btn btn-success">Kuesioner 1</i></a>
   	 <a href="question3.php" class="btn btn-success">Kuesioner 2</a>
   	 <a href="question4.php" class="btn btn-success">Kuesioner 3</a>
    </div>
</div>


<script type="text/javascript">
$(function (){
  $('#pilihupdate').submit(function(e){
    return false;
  });

  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
  $('#modaltrigger').val('1');
});
// $(document).ready(function(){
		// $("#modaltrigger").click(function(){
			// $("#pilihupdate").show();
			// $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
			// $('#modaltrigger').val('1');
		// });
// });
</script>

<?php

$result_page = mysql_query($query_page);
$jmldata = mysql_num_rows($result_page);
$jmlhalaman = ceil($jmldata / $batas);

echo "<div class='pagination'><ul>";
for($i=1;$i<=$jmlhalaman;$i++)
    echo "<li> <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a></li>";
?>
</ul>
</div>

<!-- MENAMPILKAN JUMLAH DATA -->
<div class="container">
	<div class="well">

	<?php
	echo "Jumlah Data : $jmldata";
	?>
	</div>
</div>
<!-- END OF MENAMPILKAN JUMLAH DATA -->

<?php
include '../template/footer.php';
?>
