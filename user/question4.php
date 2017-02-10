<?php
require_once '../inc/config.php';
require_once '../inc/function.php';
include '../template/header.php';
?>
<html>
<head>
<meta charset="utf-8">
		<title>BELAJAR CRUD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/table.bootstrap.min.css" rel="stylesheet">

		<!--script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script-->
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</head>
<body>
<div class="container">

<h4 align="center">Daftar Pertanyaan <br>
				  Instant Insight Inventory<br></h4>
<form method="post" action="">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="600px">
			
						<tr>
							<td>1.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no1" value="a" required> a. Menjawab suatu pertanyaan dengan cepat dan kadang2 tanpa berpikir panjang</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no1" value="b" required> b. Lebih suka berpikir banyak sebelum menjawab atau menyampaikan pendapat</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>2.</td>
							<td>Dalam perjalanan hidup, saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no2" value="a" required> a. Penuh percaya diri dalam mencoba sesuatu</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no2" value="b" required> b. Lebih dahulu perlu memahami secara mendalam sesuatu sebelum mencobanya</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>3.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no3" value="a" required> a. Ingin menemukan apa yang orang lain harapkan dari saya</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no3" value="b" required> b. Ingin melakukan segala sesuatunya sesuai dengan cara saya sendiri</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>4.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no4" value="a" required> a. Menemukan kekuatan penuh ketika berada ditengah orang banyak, seperti ketika berada di pesta</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no4" value="b" required> b. Menjadi tidak tenang ketika berada  ditengah orang banyak dan rasanya lebih baik menjauh dan menyendiri untuk berpikir tentang diri sendiri</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>5.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no5" value="a" required> a. Senang dengan banyak fariasi dan aktif dalam banyak kegiatan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no5" value="b" required> b. Senang dengan tempat yang tenang dimana saya dapat berefleksi tanpa terganggu</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>6.</td>
							<td>Dalam melakukan suatu pekerjaan, saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no6" value="a" required> a. Senang memperhatikan dalam hal-hal detaildan membiarkan semuanya seperti apa</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no6" value="b" required> b. Cenderung mengabaikan bagian detail dan lebih cenderun untuk mencari arti yang tersembunyi dibalik semua itu</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>7.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no7" value="a" required> a. Senang memeriksa, mengontrol dan berusaha menemukan banyak informasi sejauh yang  saya bisa</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no7" value="b" required> b. Menjadi kurang sabar dalam hal-hal rutin, pengulangan-pengulangan dan semua hal yang lamban dalam kegiatan</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>8.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no8" value="a" required> a. Menerima dan menikmati sesuatu sebagaimana adanya, merekam peristiwa-peristiwa masa lalu dan belajar kombinasi dua hal diatas satu rasa kebersamaan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no8" value="b" required> b. Menduga segala sesuatu dalam terang pengetahuan</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>9.</td>
							<td>Saya lebih cocok dan tepat sebagai ..</td>
							<td><tr>
									<td><td><input type="radio" name="no9" value="a" required> a. Orang realistis dan praktis</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no9" value="b" required> b. Orang yang penuh imajinasi dan daya cipta</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>10.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no10" value="a" required> a. Jarang mengandalkan inspirasi untuk maju kedepan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no10" value="b" required> b. Memiliki energi banyak dengan beberapa keluwesan diantaranya</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>11.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no11" value="a" required> a. Lebih membutuhkan peraturan-peraturan yang adil untuk apa ayng sedang saya kerjakan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no11" value="b" required> b. Harmoni adalah nilai hidup yang paling penting dalam hidup saya</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>12.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no12" value="a" required> a. Berusaha untuk menganalisis secara logis fakta-fakta dalam membuat suatu keputusan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no12" value="b" required> b. Berfikir tentang apa yang terbaik bagi semua orang dalam hubungan dengan suatu keputusan</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>13.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no13" value="a" required> a. Menerima dengan sukarela dan jujur kritik-kritik sebagai suatu yang alamiah dan bagian dari persahabatan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no13" value="b" required> b. Berusaha menghindari pertentangan dan merasa sangat tidak tenang ketika menerima kritikan</input></td></td>
								</tr>
						
								</td>
							
						</tr> 
						<tr>
							<td>14</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no14" value="a" required> a. Mengenal orang banyak yang sangat halus dan emosional dalam membuat suatu keputusan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no14" value="b" required> b. Terluka oleh orang-orang yang cenderung menganalisis atau membuat pernyataan-pernyataan dingin ketika saya membutuhkan pemahaman dan pengetahuan</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>15.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no15" value="a" required> a. Sering mengalami kesulitan dalam mengekspresikan emosi-emosi dalam pengalaman saya secara bebas</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no15" value="b" required> b. Gampang mengekspresikan perasaan-perasaan saya dan gampang pula mengerti perasaan orang lain</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>16.</td>
							<td>Dalam perjalanan hidup, saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no16" value="a" required> a. Cenderung dikendalikan oleh peristiwa-peristiwa hidup saya dan menerima semua peristiwa itu sebagaimana seharusnya</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no16" value="b" required> b. Perlu memahami peristiwa-peristiwa dalam hidup saya dan akrena itu saya membutuhkan banyak waktu sebelum membuat keputusan</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>17.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no17" value="a" required> a. Gampang berubah pikiran</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no17" value="b" required> b. Lamaban memutuskan sesuatu dan lamban pula mengubah pikiran</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>18.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no18" value="a" required> a. Membutuhkan jadwal dan peraturan yang tetap dalam melakukan sesuatu</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no18" value="b" required> b. Cenderung lebih bebas dalam melakukan sesuatu</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>19.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no19" value="a" required> a. Menyusun waktu dan prioritas dengan rapi sebelum memulai dan menyelesaikan</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no19" value="b" required> b. Menunda-nunda pekerjaan hingga saat-saat terakhir</input></td></td>
								</tr>
						
								</td>
							
						</tr>
						<tr>
							<td>20.</td>
							<td>Saya ..</td>
							<td><tr>
									<td><td><input type="radio" name="no20" value="a" required> a. Lebih senang dengan teman-teman yang turut berpartisipasi dalam cita-cita dan norma-norma saya</input></td>
								</tr>
								<tr>
									<td><td><input type="radio" name="no20" value="b" required> b. Memilih teman-teman yang memiliki minat yang sama dengan mereka saya gampang membagikan pengalaman-pengalaman hidup umum saya </input></td></td>
								</tr>
						
								</td>
								<input type="hidden" name="id_pasien" value="<?php echo $_GET['id_pasien'] ?>">
								
							
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="submit">
							<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a></td>
							
						</tr>
					</table>
</form>
<?php

error_reporting(0);

if($_POST['submit']<>''){
	$post=$_POST;
	unset($post['submit']);
	$post['date'] 		= date('Y-m-d H:i:s');
	if(insert("questioner3",$post)){
				echo "<script>alert('Success, data saved'); window.location.href='http://localhost/aids/user/hasil_questioner.php?id_pasien=".$_GET['id_pasien']."'</script>";
		}
			
		
		else{
			echo "Data gagal disimpan!";
		}
}
// else{
	// exit;
// }
?>

<?php
include '../template/footer.php';
?>

</div>
						
</body>
</html>