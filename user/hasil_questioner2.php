<?php
require_once '../inc/config.php';
require_once '../inc/function.php';
include '../template/header.php';

$tampil=mysql_query("SELECT * FROM questioner1 where id_pasien='".$_GET['id_pasien']."' ORDER BY id_questioner desc limit 1");
$ambil = mysql_fetch_array($tampil);
$idq = $ambil['id_questioner'];



$sql ="select (sum_ya1+
		  sum_ya2+
		  sum_ya3+
		  sum_ya4+
		  sum_ya5+
		  sum_ya6+
		  sum_ya7+
		  sum_ya8+
		  sum_ya9+
		  sum_ya10+
		  sum_ya11+
		  sum_ya12+
		  sum_ya13+
		  sum_ya14+
		  sum_ya15+
		  sum_ya16+
		  sum_ya17
		  )jumlah_ya,
		  (sum_no1+
		  sum_no2+
		  sum_no3+
		  sum_no4+
		  sum_no5+
		  sum_no6+
		  sum_no7+
		  sum_no8+
		  sum_no9+
		  sum_no10+
		  sum_no11+
		  sum_no12+
		  sum_no13+
		  sum_no14+
		  sum_no15+
		  sum_no16+
		  sum_no17
		  )jumlah_no
		   from(
select sum(case
				when no1 ='1' then 1 else 0 end)as sum_ya1,
		 sum(case
				when no2 ='1' then 1 else 0 end)as sum_ya2,
		 sum(case
				when no3 ='1' then 1 else 0 end)as sum_ya3,
		 sum(case
				when no4 ='1' then 1 else 0 end)as sum_ya4,
		 sum(case
				when no5 ='1' then 1 else 0 end)as sum_ya5,
		 sum(case
				when no6 ='1' then 1 else 0 end)as sum_ya6,
		 sum(case
				when no7 ='1' then 1 else 0 end)as sum_ya7,
		 sum(case
				when no8 ='1' then 1 else 0 end)as sum_ya8,
		 sum(case
				when no9 ='1' then 1 else 0 end)as sum_ya9,
		 sum(case
				when no10 ='1' then 1 else 0 end)as sum_ya10,
		 sum(case
				when no11 ='1' then 1 else 0 end)as sum_ya11,
		 sum(case
				when no12 ='1' then 1 else 0 end)as sum_ya12,
		 sum(case
				when no13 ='1' then 1 else 0 end)as sum_ya13,
		 sum(case
				when no14 ='1' then 1 else 0 end)as sum_ya14,
		 sum(case
				when no15 ='1' then 1 else 0 end)as sum_ya15,
		 sum(case
				when no16 ='1' then 1 else 0 end)as sum_ya16,
		 sum(case
				when no17 ='1' then 1 else 0 end)as sum_ya17,
		 sum(case
				when no1 ='0' then 1 else 0 end)as sum_no1,
		 sum(case
				when no2 ='0' then 1 else 0 end)as sum_no2,
		 sum(case
				when no3 ='0' then 1 else 0 end)as sum_no3,
		 sum(case
				when no4 ='0' then 1 else 0 end)as sum_no4,
		 sum(case
				when no5 ='0' then 1 else 0 end)as sum_no5,
		 sum(case
				when no6 ='0' then 1 else 0 end)as sum_no6,
		 sum(case
				when no7 ='0' then 1 else 0 end)as sum_no7,
		 sum(case
				when no8 ='0' then 1 else 0 end)as sum_no8,
		 sum(case
				when no9 ='0' then 1 else 0 end)as sum_no9,
		 sum(case
				when no10 ='0' then 1 else 0 end)as sum_no10,
		 sum(case
				when no11 ='0' then 1 else 0 end)as sum_no11,
		 sum(case
				when no12 ='0' then 1 else 0 end)as sum_no12,
		 sum(case
				when no13 ='0' then 1 else 0 end)as sum_no13,
		 sum(case
				when no14 ='0' then 1 else 0 end)as sum_no14,
		 sum(case
				when no15 ='0' then 1 else 0 end)as sum_no15,
		 sum(case
				when no16 ='0' then 1 else 0 end)as sum_no16,
		 sum(case
				when no17 ='0' then 1 else 0 end)as sum_no17
				from questioner1 where id_pasien='".$_GET['id_pasien']."' and id_questioner='".$idq."'
				)a ";
$query= mysql_query($sql);
$row = mysql_fetch_array($query);
$data = mysql_num_rows($query);
#print_r($row);
#echo $sql;
#die;
#$data[] = $row;

if(isset($row['jumlah_ya'])){

$jumlah_ya = $row['jumlah_ya'];
$jumlah_no = $row['jumlah_no'];

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
<p>Hasil Question Berikut adalah<br></p>
<p><?php echo "Jumlah ya= ".$jumlah_ya."<br>"."Jumlah no= ".$jumlah_no; ?></p>

<?php
	if ($jumlah_ya > 7){
		mysql_query("UPDATE questioner1 SET klas_anti_sosial = 'Kuat'  
                             where id_pasien='".$_GET['id_pasien']."' and id_questioner='".$idq."'");
		echo "
		<p>Kesimpulan</p>
		<p>Pasien memiliki tindakan yang menyebabkan atau memungkinkan ada indikasi pelecehan, ancaman dan terhadap orang lain sehingga Pasien bersifat 

		Dogmatis, Konflik antar pribadi, Pengkhianatan, Serangan Fisik, mengintimidasi, kecongkakan, selalu mengalah,keangkuhan,tidak dapat menyesuaikan diri,Terganggu emosional, denial, sikap menghakimi, pelecehan, sindiran tajam.
		</p>";
	}
	else if ($jumlah_ya >= 5){
		mysql_query("UPDATE questioner1 SET klas_anti_sosial = 'Sedang'  
                             where id_pasien='".$_GET['id_pasien']."' and id_questioner='".$idq."'");
		echo "<p> Pasien belum bisa diambil kesimpulan </p>";
	}
	else
	{
		mysql_query("UPDATE questioner1 SET klas_anti_sosial = 'Lemah'  
                             where id_pasien='".$_GET['id_pasien']."' and id_questioner='".$idq."'");
		echo "<p> Pasien Lemah belum bisa diambil kesimpulan </p>";
	}
	
}else{
	echo "Pasien tersebut belum mengisi kuisioner";
}
?>
<p><br><br>
		<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>
<p>

</div>
</body>
</html>

