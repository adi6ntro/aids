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
<br>
<h4 align="center">Pertanyaan Wawancara Pasien dengan Ganguuann Kepribadian Borderline<br></h4>
<br>
<br>
<form method="post" action="">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="600px">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pertanyaan</th>
                <th>Ya</th>
                <th>Tidak</th>
            </tr>
        </thead>			
						<tr>
							<td>1.</td>
							<td>Pernahkah anda merasa panik/ akan menjadi gila ketika memikirkan orang yang anda sayangi akan pergi meninggalkan anda?</td>
							<td><input type="radio" name="no1" value="1" required></input></td>
							<td><input type="radio" name="no1" value="0" required></input></td>
						</tr>
						<tr>
							<td>2. </input></td>
							<td>Apakah hubungan anda dengan orang yang anda sayangi memiliki banyak pergolakan?</td>
							<td><input type="radio" name="no2" value="1" required></input></td>
							<td><input type="radio" name="no2" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Pernahkah anda merasa perubahan tiba-tiba tentang siapa diri anda dan kemana  anda akan pergi?</td>
							<td><input type="radio" name="no3" value="1" required></input></td>
							<td><input type="radio" name="no3" value="0" required></input></td>
						</tr>
						<tr>
							<td>4. </input></td>
							<td>Apakah persaan mengenai siapa diri anda sering berubah dramatis?</td>
							<td><input type="radio" name="no4" value="1" required></input></td>
							<td><input type="radio" name="no4" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Apakah anda merasa diri anda berbeda ketika anda bersama dengan orang berbeda atau pada situasi yang berbeda, sehingga anda tidak mengetahui siapa diri anda?</td>
							<td><input type="radio" name="no5" value="1" required></input></td>
							<td><input type="radio" name="no5" value="0" required></input></td>
						</tr>
						<tr>
							<td>6. </input></td>
							<td>Seringkah ada perubahan tiba-tiba mengenai target, rencana karier, dan kepercayaan anda?</td>
							<td><input type="radio" name="no6" value="1" required></input></td>
							<td><input type="radio" name="no6" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>7.</td>
							<td>Pernahkah anda melakukan hal dengan impulsif (belanja, hubungan seksual, penggunaan NAPZA, menyetir ugal-ugalan, makan terlalu banyak)?</td>
							<td><input type="radio" name="no7" value="1" required></input></td>
							<td><input type="radio" name="no7" value="0" required></input></td>
						</tr>
						<tr>
							<td>8. </input></td>
							<td>Pernahkah anda mencoba melukai atau membunuh diri anda, atau mengancam akan melakukannya?</td>
							<td><input type="radio" name="no8" value="1" required></input></td>
							<td><input type="radio" name="no8" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>9. </input></td>
							<td>Pernahkah anda memotong, membakar, atau melukai diri anda dengan sengaja?</td>
							<td><input type="radio" name="no9" value="1" required></input></td>
							<td><input type="radio" name="no9" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>10. </input></td>
							<td>Apakah anda sering mengalami perubahan mood tiba-tiba?</td>
							<td><input type="radio" name="no10" value="1" required></input></td>
							<td><input type="radio" name="no10" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>11. </input></td>
							<td>Apakah anda sering merasa kosong didalam diri anda?</td>
							<td><input type="radio" name="no11" value="1" required></input></td>
							<td><input type="radio" name="no11" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>12. </input></td>
							<td>Seringkah anda mengalami emosi yang meluap atau marah sampai hilang kendali?</td>
							<td><input type="radio" name="no12" value="1" required></input></td>
							<td><input type="radio" name="no12" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>13.</td>
							<td>Apakah anda memukul orang atau melempar barang saat anda marah?</td>
							<td><input type="radio" name="no13" value="1" required></input></td>
							<td><input type="radio" name="no13" value="0" required></input></td>
						</tr> 
						<tr>
							<td>14. </input></td>
							<td>Apakah hal kecil membuat anda marah?</td>
							<td><input type="radio" name="no14" value="1" required></input></td>
							<td><input type="radio" name="no14" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>15. </input></td>
							<td>Sebelum usia 13 tahun, apakah anda yang pernah pulang malam sekali melebihi waktu yang seharusnya?</td>
							<td><input type="radio" name="no15" value="1" required></input></td>
							<td><input type="radio" name="no15" value="0" required></input></td>
							<td></td>
						</tr>
						<tr>
							<td>16. </input></td>
							<td>Sebelum usia 13 tahun, apakah anda sering bolos sekolah?</td>
							<td><input type="radio" name="no16" value="1" required></input></td>
							<td><input type="radio" name="no16" value="0" required></input></td>
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
include '../template/footer.php';
error_reporting(0);

if($_POST['submit']<>''){
	$post=$_POST;
	unset($post['submit']);
	$post['date'] 		= date('Y-m-d H:i:s');
	print_r($post);
	if(insert("questioner2",$post)){
				echo "<script>alert('Success, data saved'); window.location.href='http://localhost/aids/user/hasil_questioner3.php?id_pasien=".$_GET['id_pasien']."'</script>";
		}		
		else{
			echo "Data gagal disimpan!";
		}
}
?>
</div>
</body>
</html>