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
<p>Hasil Perhitungan Bayes sebagai berikut<br></p>

<?php

	$q['all'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' ORDER BY id_questioner desc limit 1;");
	$ambil = mysql_fetch_array($q['all']);
	$no1 = $ambil['no1'];
	$no2 = $ambil['no2'];
	$no3 = $ambil['no3'];
	$no4 = $ambil['no4'];
	$no5 = $ambil['no5'];
	$no6 = $ambil['no6'];
	$no7 = $ambil['no7'];
	$no8 = $ambil['no8'];
	$no9 = $ambil['no9'];
	$no10 = $ambil['no10'];
	$no11 = $ambil['no11'];
	$no12 = $ambil['no12'];
	$no13 = $ambil['no13'];
	$no14 = $ambil['no14'];
	$no15 = $ambil['no15'];
	$no16 = $ambil['no16'];
	$kelas = $ambil['klas_borderline'];
	
	$q['all'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."';");
	$count['all'] = mysql_num_rows($q['all']);

	//HITUNG NILAI kuat (klas_borderline = Kuat)
	$q['positive'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat';");
	$count['kuat'] = mysql_num_rows($q['positive']);
	
	//HITUNG NILAI kuat (klas_borderline = Sedang)
	$q['positive'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang';");
	$count['sedang'] = mysql_num_rows($q['positive']);
	
	//HITUNG NILAI kuat (klas_borderline = Lemah)
	$q['positive'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah';");
	$count['lemah'] = mysql_num_rows($q['positive']);
	
	//No1
	$q['no1_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no1='1';");
	$count['no1_kuat_ya'] = mysql_num_rows($q['no1_kuat_ya']);
	$q['no1_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no1='1';");
	$count['no1_sedang_ya'] = mysql_num_rows($q['no1_sedang_ya']);
	$q['no1_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no1='1';");
	$count['no1_lemah_ya'] = mysql_num_rows($q['no1_lemah_ya']);
	
	$q['no1_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no1='0';");
	$count['no1_kuat_tidak'] = mysql_num_rows($q['no1_kuat_tidak']);
	$q['no1_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no1='0';");
	$count['no1_sedang_tidak'] = mysql_num_rows($q['no1_sedang_tidak']);
	$q['no1_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no1='0';");
	$count['no1_lemah_tidak'] = mysql_num_rows($q['no1_lemah_tidak']);
	
	//no2
	$q['no2_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no2='1';");
	$count['no2_kuat_ya'] = mysql_num_rows($q['no2_kuat_ya']);
	$q['no2_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no2='1';");
	$count['no2_sedang_ya'] = mysql_num_rows($q['no2_sedang_ya']);
	$q['no2_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no2='1';");
	$count['no2_lemah_ya'] = mysql_num_rows($q['no2_lemah_ya']);
	
	$q['no2_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no2='0';");
	$count['no2_kuat_tidak'] = mysql_num_rows($q['no2_kuat_tidak']);
	$q['no2_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no2='0';");
	$count['no2_sedang_tidak'] = mysql_num_rows($q['no2_sedang_tidak']);
	$q['no2_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no2='0';");
	$count['no2_lemah_tidak'] = mysql_num_rows($q['no2_lemah_tidak']);
	
	//no3
	$q['no3_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no3='1';");
	$count['no3_kuat_ya'] = mysql_num_rows($q['no3_kuat_ya']);
	$q['no3_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no3='1';");
	$count['no3_sedang_ya'] = mysql_num_rows($q['no3_sedang_ya']);
	$q['no3_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no3='1';");
	$count['no3_lemah_ya'] = mysql_num_rows($q['no3_lemah_ya']);
	
	$q['no3_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no3='0';");
	$count['no3_kuat_tidak'] = mysql_num_rows($q['no3_kuat_tidak']);
	$q['no3_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no3='0';");
	$count['no3_sedang_tidak'] = mysql_num_rows($q['no3_sedang_tidak']);
	$q['no3_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no3='0';");
	$count['no3_lemah_tidak'] = mysql_num_rows($q['no3_lemah_tidak']);
	
	//no4
	$q['no4_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no4='1';");
	$count['no4_kuat_ya'] = mysql_num_rows($q['no4_kuat_ya']);
	$q['no4_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no4='1';");
	$count['no4_sedang_ya'] = mysql_num_rows($q['no4_sedang_ya']);
	$q['no4_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no4='1';");
	$count['no4_lemah_ya'] = mysql_num_rows($q['no4_lemah_ya']);
	
	$q['no4_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no4='0';");
	$count['no4_kuat_tidak'] = mysql_num_rows($q['no4_kuat_tidak']);
	$q['no4_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no4='0';");
	$count['no4_sedang_tidak'] = mysql_num_rows($q['no4_sedang_tidak']);
	$q['no4_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no4='0';");
	$count['no4_lemah_tidak'] = mysql_num_rows($q['no4_lemah_tidak']);
	
	//no5
	$q['no5_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no5='1';");
	$count['no5_kuat_ya'] = mysql_num_rows($q['no5_kuat_ya']);
	$q['no5_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no5='1';");
	$count['no5_sedang_ya'] = mysql_num_rows($q['no5_sedang_ya']);
	$q['no5_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no5='1';");
	$count['no5_lemah_ya'] = mysql_num_rows($q['no5_lemah_ya']);
	
	$q['no5_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no5='0';");
	$count['no5_kuat_tidak'] = mysql_num_rows($q['no5_kuat_tidak']);
	$q['no5_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no5='0';");
	$count['no5_sedang_tidak'] = mysql_num_rows($q['no5_sedang_tidak']);
	$q['no5_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no5='0';");
	$count['no5_lemah_tidak'] = mysql_num_rows($q['no5_lemah_tidak']);
	
	//no6
	$q['no6_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no6='1';");
	$count['no6_kuat_ya'] = mysql_num_rows($q['no6_kuat_ya']);
	$q['no6_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no6='1';");
	$count['no6_sedang_ya'] = mysql_num_rows($q['no6_sedang_ya']);
	$q['no6_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no6='1';");
	$count['no6_lemah_ya'] = mysql_num_rows($q['no6_lemah_ya']);
	
	$q['no6_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no6='0';");
	$count['no6_kuat_tidak'] = mysql_num_rows($q['no6_kuat_tidak']);
	$q['no6_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no6='0';");
	$count['no6_sedang_tidak'] = mysql_num_rows($q['no6_sedang_tidak']);
	$q['no6_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no6='0';");
	$count['no6_lemah_tidak'] = mysql_num_rows($q['no6_lemah_tidak']);
	
	//no7
	$q['no7_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no7='1';");
	$count['no7_kuat_ya'] = mysql_num_rows($q['no7_kuat_ya']);
	$q['no7_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no7='1';");
	$count['no7_sedang_ya'] = mysql_num_rows($q['no7_sedang_ya']);
	$q['no7_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no7='1';");
	$count['no7_lemah_ya'] = mysql_num_rows($q['no7_lemah_ya']);
	
	$q['no7_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no7='0';");
	$count['no7_kuat_tidak'] = mysql_num_rows($q['no7_kuat_tidak']);
	$q['no7_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no7='0';");
	$count['no7_sedang_tidak'] = mysql_num_rows($q['no7_sedang_tidak']);
	$q['no7_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no7='0';");
	$count['no7_lemah_tidak'] = mysql_num_rows($q['no7_lemah_tidak']);
	
	//no8
	$q['no8_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no8='1';");
	$count['no8_kuat_ya'] = mysql_num_rows($q['no8_kuat_ya']);
	$q['no8_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no8='1';");
	$count['no8_sedang_ya'] = mysql_num_rows($q['no8_sedang_ya']);
	$q['no8_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no8='1';");
	$count['no8_lemah_ya'] = mysql_num_rows($q['no8_lemah_ya']);
	
	$q['no8_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no8='0';");
	$count['no8_kuat_tidak'] = mysql_num_rows($q['no8_kuat_tidak']);
	$q['no8_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no8='0';");
	$count['no8_sedang_tidak'] = mysql_num_rows($q['no8_sedang_tidak']);
	$q['no8_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no8='0';");
	$count['no8_lemah_tidak'] = mysql_num_rows($q['no8_lemah_tidak']);
	
	//no9
	$q['no9_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no9='1';");
	$count['no9_kuat_ya'] = mysql_num_rows($q['no9_kuat_ya']);
	$q['no9_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no9='1';");
	$count['no9_sedang_ya'] = mysql_num_rows($q['no9_sedang_ya']);
	$q['no9_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no9='1';");
	$count['no9_lemah_ya'] = mysql_num_rows($q['no9_lemah_ya']);
	
	$q['no9_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no9='0';");
	$count['no9_kuat_tidak'] = mysql_num_rows($q['no9_kuat_tidak']);
	$q['no9_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no9='0';");
	$count['no9_sedang_tidak'] = mysql_num_rows($q['no9_sedang_tidak']);
	$q['no9_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no9='0';");
	$count['no9_lemah_tidak'] = mysql_num_rows($q['no9_lemah_tidak']);
	
	//no10
	$q['no10_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no10='1';");
	$count['no10_kuat_ya'] = mysql_num_rows($q['no10_kuat_ya']);
	$q['no10_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no10='1';");
	$count['no10_sedang_ya'] = mysql_num_rows($q['no10_sedang_ya']);
	$q['no10_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no10='1';");
	$count['no10_lemah_ya'] = mysql_num_rows($q['no10_lemah_ya']);
	
	$q['no10_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no10='0';");
	$count['no10_kuat_tidak'] = mysql_num_rows($q['no10_kuat_tidak']);
	$q['no10_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no10='0';");
	$count['no10_sedang_tidak'] = mysql_num_rows($q['no10_sedang_tidak']);
	$q['no10_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no10='0';");
	$count['no10_lemah_tidak'] = mysql_num_rows($q['no10_lemah_tidak']);
	
	//no11
	$q['no11_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no11='1';");
	$count['no11_kuat_ya'] = mysql_num_rows($q['no11_kuat_ya']);
	$q['no11_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no11='1';");
	$count['no11_sedang_ya'] = mysql_num_rows($q['no11_sedang_ya']);
	$q['no11_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no11='1';");
	$count['no11_lemah_ya'] = mysql_num_rows($q['no11_lemah_ya']);
	
	$q['no11_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no11='0';");
	$count['no11_kuat_tidak'] = mysql_num_rows($q['no11_kuat_tidak']);
	$q['no11_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no11='0';");
	$count['no11_sedang_tidak'] = mysql_num_rows($q['no11_sedang_tidak']);
	$q['no11_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no11='0';");
	$count['no11_lemah_tidak'] = mysql_num_rows($q['no11_lemah_tidak']);
	
	//no12
	$q['no12_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no12='1';");
	$count['no12_kuat_ya'] = mysql_num_rows($q['no12_kuat_ya']);
	$q['no12_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no12='1';");
	$count['no12_sedang_ya'] = mysql_num_rows($q['no12_sedang_ya']);
	$q['no12_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no12='1';");
	$count['no12_lemah_ya'] = mysql_num_rows($q['no12_lemah_ya']);
	
	$q['no12_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no12='0';");
	$count['no12_kuat_tidak'] = mysql_num_rows($q['no12_kuat_tidak']);
	$q['no12_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no12='0';");
	$count['no12_sedang_tidak'] = mysql_num_rows($q['no12_sedang_tidak']);
	$q['no12_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no12='0';");
	$count['no12_lemah_tidak'] = mysql_num_rows($q['no12_lemah_tidak']);
	
	//no13
	$q['no13_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no13='1';");
	$count['no13_kuat_ya'] = mysql_num_rows($q['no13_kuat_ya']);
	$q['no13_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no13='1';");
	$count['no13_sedang_ya'] = mysql_num_rows($q['no13_sedang_ya']);
	$q['no13_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no13='1';");
	$count['no13_lemah_ya'] = mysql_num_rows($q['no13_lemah_ya']);
	
	$q['no13_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no13='0';");
	$count['no13_kuat_tidak'] = mysql_num_rows($q['no13_kuat_tidak']);
	$q['no13_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no13='0';");
	$count['no13_sedang_tidak'] = mysql_num_rows($q['no13_sedang_tidak']);
	$q['no13_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no13='0';");
	$count['no13_lemah_tidak'] = mysql_num_rows($q['no13_lemah_tidak']);
	
	//no14
	$q['no14_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no14='1';");
	$count['no14_kuat_ya'] = mysql_num_rows($q['no14_kuat_ya']);
	$q['no14_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no14='1';");
	$count['no14_sedang_ya'] = mysql_num_rows($q['no14_sedang_ya']);
	$q['no14_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no14='1';");
	$count['no14_lemah_ya'] = mysql_num_rows($q['no14_lemah_ya']);
	
	$q['no14_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no14='0';");
	$count['no14_kuat_tidak'] = mysql_num_rows($q['no14_kuat_tidak']);
	$q['no14_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no14='0';");
	$count['no14_sedang_tidak'] = mysql_num_rows($q['no14_sedang_tidak']);
	$q['no14_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no14='0';");
	$count['no14_lemah_tidak'] = mysql_num_rows($q['no14_lemah_tidak']);
	
	//no15
	$q['no15_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no15='1';");
	$count['no15_kuat_ya'] = mysql_num_rows($q['no15_kuat_ya']);
	$q['no15_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no15='1';");
	$count['no15_sedang_ya'] = mysql_num_rows($q['no15_sedang_ya']);
	$q['no15_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no15='1';");
	$count['no15_lemah_ya'] = mysql_num_rows($q['no15_lemah_ya']);
	
	$q['no15_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no15='0';");
	$count['no15_kuat_tidak'] = mysql_num_rows($q['no15_kuat_tidak']);
	$q['no15_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no15='0';");
	$count['no15_sedang_tidak'] = mysql_num_rows($q['no15_sedang_tidak']);
	$q['no15_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no15='0';");
	$count['no15_lemah_tidak'] = mysql_num_rows($q['no15_lemah_tidak']);
	
	//no16
	$q['no16_kuat_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no16='1';");
	$count['no16_kuat_ya'] = mysql_num_rows($q['no16_kuat_ya']);
	$q['no16_sedang_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no16='1';");
	$count['no16_sedang_ya'] = mysql_num_rows($q['no16_sedang_ya']);
	$q['no16_lemah_ya'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no16='1';");
	$count['no16_lemah_ya'] = mysql_num_rows($q['no16_lemah_ya']);
	
	$q['no16_kuat_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Kuat' and no16='0';");
	$count['no16_kuat_tidak'] = mysql_num_rows($q['no16_kuat_tidak']);
	$q['no16_sedang_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Sedang' and no16='0';");
	$count['no16_sedang_tidak'] = mysql_num_rows($q['no16_sedang_tidak']);
	$q['no16_lemah_tidak'] = mysql_query("SELECT * FROM questioner2 where id_pasien='".$_GET['id_pasien']."' and klas_borderline='Lemah' and no16='0';");
	$count['no16_lemah_tidak'] = mysql_num_rows($q['no16_lemah_tidak']);
	
	//Peluang No1
	$p_no1_kuat_ya = $count['no1_kuat_ya'] / $count['kuat'];
	$p_no1_sedang_ya = $count['no1_sedang_ya'] / $count['sedang'];
	$p_no1_lemah_ya = $count['no1_lemah_ya'] / $count['lemah'];
	if($p_no1_kuat_ya == 0){
		$p_no1_kuat_ya = 0.7;
	}
	if($p_no1_sedang_ya == 0){
		$p_no1_sedang_ya = 0.7;
	}
	if($p_no1_lemah_ya == 0){
		$p_no1_lemah_ya = 0.7;
	}
	
	$p_no1_kuat_tidak = $count['no1_kuat_tidak'] / $count['kuat'];
	$p_no1_sedang_tidak = $count['no1_sedang_tidak'] / $count['sedang'];
	$p_no1_lemah_tidak = $count['no1_lemah_tidak'] / $count['lemah'];
	if($p_no1_kuat_tidak == 0){
		$p_no1_kuat_tidak = 0.7;
	}
	if($p_no1_sedang_tidak == 0){
		$p_no1_sedang_tidak = 0.7;
	}
	if($p_no1_lemah_tidak == 0){
		$p_no1_lemah_tidak = 0.7;
	}
	
	//Peluang no2
	$p_no2_kuat_ya = $count['no2_kuat_ya'] / $count['kuat'];
	$p_no2_sedang_ya = $count['no2_sedang_ya'] / $count['sedang'];
	$p_no2_lemah_ya = $count['no2_lemah_ya'] / $count['lemah'];
	if($p_no2_kuat_ya == 0){
		$p_no2_kuat_ya = 0.7;
	}
	if($p_no2_sedang_ya == 0){
		$p_no2_sedang_ya = 0.7;
	}
	if($p_no2_lemah_ya == 0){
		$p_no2_lemah_ya = 0.7;
	}
	
	$p_no2_kuat_tidak = $count['no2_kuat_tidak'] / $count['kuat'];
	$p_no2_sedang_tidak = $count['no2_sedang_tidak'] / $count['sedang'];
	$p_no2_lemah_tidak = $count['no2_lemah_tidak'] / $count['lemah'];
	if($p_no2_kuat_tidak == 0){
		$p_no2_kuat_tidak = 0.7;
	}
	if($p_no2_sedang_tidak == 0){
		$p_no2_sedang_tidak = 0.7;
	}
	if($p_no2_lemah_tidak == 0){
		$p_no2_lemah_tidak = 0.7;
	}
	
	//Peluang no3
	$p_no3_kuat_ya = $count['no3_kuat_ya'] / $count['kuat'];
	$p_no3_sedang_ya = $count['no3_sedang_ya'] / $count['sedang'];
	$p_no3_lemah_ya = $count['no3_lemah_ya'] / $count['lemah'];
	if($p_no3_kuat_ya == 0){
		$p_no3_kuat_ya = 0.7;
	}
	if($p_no3_sedang_ya == 0){
		$p_no3_sedang_ya = 0.7;
	}
	if($p_no3_lemah_ya == 0){
		$p_no3_lemah_ya = 0.7;
	}
	
	$p_no3_kuat_tidak = $count['no3_kuat_tidak'] / $count['kuat'];
	$p_no3_sedang_tidak = $count['no3_sedang_tidak'] / $count['sedang'];
	$p_no3_lemah_tidak = $count['no3_lemah_tidak'] / $count['lemah'];
	if($p_no3_kuat_tidak == 0){
		$p_no3_kuat_tidak = 0.7;
	}
	if($p_no3_sedang_tidak == 0){
		$p_no3_sedang_tidak = 0.7;
	}
	if($p_no3_lemah_tidak == 0){
		$p_no3_lemah_tidak = 0.7;
	}
	
	//Peluang no4
	$p_no4_kuat_ya = $count['no4_kuat_ya'] / $count['kuat'];
	$p_no4_sedang_ya = $count['no4_sedang_ya'] / $count['sedang'];
	$p_no4_lemah_ya = $count['no4_lemah_ya'] / $count['lemah'];
	if($p_no4_kuat_ya == 0){
		$p_no4_kuat_ya = 0.7;
	}
	if($p_no4_sedang_ya == 0){
		$p_no4_sedang_ya = 0.7;
	}
	if($p_no4_lemah_ya == 0){
		$p_no4_lemah_ya = 0.7;
	}
	
	$p_no4_kuat_tidak = $count['no4_kuat_tidak'] / $count['kuat'];
	$p_no4_sedang_tidak = $count['no4_sedang_tidak'] / $count['sedang'];
	$p_no4_lemah_tidak = $count['no4_lemah_tidak'] / $count['lemah'];
	if($p_no4_kuat_tidak == 0){
		$p_no4_kuat_tidak = 0.7;
	}
	if($p_no4_sedang_tidak == 0){
		$p_no4_sedang_tidak = 0.7;
	}
	if($p_no4_lemah_tidak == 0){
		$p_no4_lemah_tidak = 0.7;
	}
	
	//Peluang no5
	$p_no5_kuat_ya = $count['no5_kuat_ya'] / $count['kuat'];
	$p_no5_sedang_ya = $count['no5_sedang_ya'] / $count['sedang'];
	$p_no5_lemah_ya = $count['no5_lemah_ya'] / $count['lemah'];
	if($p_no5_kuat_ya == 0){
		$p_no5_kuat_ya = 0.7;
	}
	if($p_no5_sedang_ya == 0){
		$p_no5_sedang_ya = 0.7;
	}
	if($p_no5_lemah_ya == 0){
		$p_no5_lemah_ya = 0.7;
	}
	
	$p_no5_kuat_tidak = $count['no5_kuat_tidak'] / $count['kuat'];
	$p_no5_sedang_tidak = $count['no5_sedang_tidak'] / $count['sedang'];
	$p_no5_lemah_tidak = $count['no5_lemah_tidak'] / $count['lemah'];
	if($p_no5_kuat_tidak == 0){
		$p_no5_kuat_tidak = 0.7;
	}
	if($p_no5_sedang_tidak == 0){
		$p_no5_sedang_tidak = 0.7;
	}
	if($p_no5_lemah_tidak == 0){
		$p_no5_lemah_tidak = 0.7;
	}
	
	//Peluang no6
	$p_no6_kuat_ya = $count['no6_kuat_ya'] / $count['kuat'];
	$p_no6_sedang_ya = $count['no6_sedang_ya'] / $count['sedang'];
	$p_no6_lemah_ya = $count['no6_lemah_ya'] / $count['lemah'];
	if($p_no6_kuat_ya == 0){
		$p_no6_kuat_ya = 0.7;
	}
	if($p_no6_sedang_ya == 0){
		$p_no6_sedang_ya = 0.7;
	}
	if($p_no6_lemah_ya == 0){
		$p_no6_lemah_ya = 0.7;
	}
	
	$p_no6_kuat_tidak = $count['no6_kuat_tidak'] / $count['kuat'];
	$p_no6_sedang_tidak = $count['no6_sedang_tidak'] / $count['sedang'];
	$p_no6_lemah_tidak = $count['no6_lemah_tidak'] / $count['lemah'];
	if($p_no6_kuat_tidak == 0){
		$p_no6_kuat_tidak = 0.7;
	}
	if($p_no6_sedang_tidak == 0){
		$p_no6_sedang_tidak = 0.7;
	}
	if($p_no6_lemah_tidak == 0){
		$p_no6_lemah_tidak = 0.7;
	}
	
	//Peluang no7
	$p_no7_kuat_ya = $count['no7_kuat_ya'] / $count['kuat'];
	$p_no7_sedang_ya = $count['no7_sedang_ya'] / $count['sedang'];
	$p_no7_lemah_ya = $count['no7_lemah_ya'] / $count['lemah'];
	if($p_no7_kuat_ya == 0){
		$p_no7_kuat_ya = 0.7;
	}
	if($p_no7_sedang_ya == 0){
		$p_no7_sedang_ya = 0.7;
	}
	if($p_no7_lemah_ya == 0){
		$p_no7_lemah_ya = 0.7;
	}
	
	$p_no7_kuat_tidak = $count['no7_kuat_tidak'] / $count['kuat'];
	$p_no7_sedang_tidak = $count['no7_sedang_tidak'] / $count['sedang'];
	$p_no7_lemah_tidak = $count['no7_lemah_tidak'] / $count['lemah'];
	if($p_no7_kuat_tidak == 0){
		$p_no7_kuat_tidak = 0.7;
	}
	if($p_no7_sedang_tidak == 0){
		$p_no7_sedang_tidak = 0.7;
	}
	if($p_no7_lemah_tidak == 0){
		$p_no7_lemah_tidak = 0.7;
	}
	
	//Peluang no8
	$p_no8_kuat_ya = $count['no8_kuat_ya'] / $count['kuat'];
	$p_no8_sedang_ya = $count['no8_sedang_ya'] / $count['sedang'];
	$p_no8_lemah_ya = $count['no8_lemah_ya'] / $count['lemah'];
	if($p_no8_kuat_ya == 0){
		$p_no8_kuat_ya = 0.7;
	}
	if($p_no8_sedang_ya == 0){
		$p_no8_sedang_ya = 0.7;
	}
	if($p_no8_lemah_ya == 0){
		$p_no8_lemah_ya = 0.7;
	}
	
	$p_no8_kuat_tidak = $count['no8_kuat_tidak'] / $count['kuat'];
	$p_no8_sedang_tidak = $count['no8_sedang_tidak'] / $count['sedang'];
	$p_no8_lemah_tidak = $count['no8_lemah_tidak'] / $count['lemah'];
	if($p_no8_kuat_tidak == 0){
		$p_no8_kuat_tidak = 0.7;
	}
	if($p_no8_sedang_tidak == 0){
		$p_no8_sedang_tidak = 0.7;
	}
	if($p_no8_lemah_tidak == 0){
		$p_no8_lemah_tidak = 0.7;
	}
	
	//Peluang no9
	$p_no9_kuat_ya = $count['no9_kuat_ya'] / $count['kuat'];
	$p_no9_sedang_ya = $count['no9_sedang_ya'] / $count['sedang'];
	$p_no9_lemah_ya = $count['no9_lemah_ya'] / $count['lemah'];
	if($p_no9_kuat_ya == 0){
		$p_no9_kuat_ya = 0.7;
	}
	if($p_no9_sedang_ya == 0){
		$p_no9_sedang_ya = 0.7;
	}
	if($p_no9_lemah_ya == 0){
		$p_no9_lemah_ya = 0.7;
	}
	
	$p_no9_kuat_tidak = $count['no9_kuat_tidak'] / $count['kuat'];
	$p_no9_sedang_tidak = $count['no9_sedang_tidak'] / $count['sedang'];
	$p_no9_lemah_tidak = $count['no9_lemah_tidak'] / $count['lemah'];
	if($p_no9_kuat_tidak == 0){
		$p_no9_kuat_tidak = 0.7;
	}
	if($p_no9_sedang_tidak == 0){
		$p_no9_sedang_tidak = 0.7;
	}
	if($p_no9_lemah_tidak == 0){
		$p_no9_lemah_tidak = 0.7;
	}
	
	//Peluang no10
	$p_no10_kuat_ya = $count['no10_kuat_ya'] / $count['kuat'];
	$p_no10_sedang_ya = $count['no10_sedang_ya'] / $count['sedang'];
	$p_no10_lemah_ya = $count['no10_lemah_ya'] / $count['lemah'];
	if($p_no10_kuat_ya == 0){
		$p_no10_kuat_ya = 0.7;
	}
	if($p_no10_sedang_ya == 0){
		$p_no10_sedang_ya = 0.7;
	}
	if($p_no10_lemah_ya == 0){
		$p_no10_lemah_ya = 0.7;
	}
	
	$p_no10_kuat_tidak = $count['no10_kuat_tidak'] / $count['kuat'];
	$p_no10_sedang_tidak = $count['no10_sedang_tidak'] / $count['sedang'];
	$p_no10_lemah_tidak = $count['no10_lemah_tidak'] / $count['lemah'];
	if($p_no10_kuat_tidak == 0){
		$p_no10_kuat_tidak = 0.7;
	}
	if($p_no10_sedang_tidak == 0){
		$p_no10_sedang_tidak = 0.7;
	}
	if($p_no10_lemah_tidak == 0){
		$p_no10_lemah_tidak = 0.7;
	}
	
	//Peluang no11
	$p_no11_kuat_ya = $count['no11_kuat_ya'] / $count['kuat'];
	$p_no11_sedang_ya = $count['no11_sedang_ya'] / $count['sedang'];
	$p_no11_lemah_ya = $count['no11_lemah_ya'] / $count['lemah'];
	if($p_no11_kuat_ya == 0){
		$p_no11_kuat_ya = 0.7;
	}
	if($p_no11_sedang_ya == 0){
		$p_no11_sedang_ya = 0.7;
	}
	if($p_no11_lemah_ya == 0){
		$p_no11_lemah_ya = 0.7;
	}
	
	$p_no11_kuat_tidak = $count['no11_kuat_tidak'] / $count['kuat'];
	$p_no11_sedang_tidak = $count['no11_sedang_tidak'] / $count['sedang'];
	$p_no11_lemah_tidak = $count['no11_lemah_tidak'] / $count['lemah'];
	if($p_no11_kuat_tidak == 0){
		$p_no11_kuat_tidak = 0.7;
	}
	if($p_no11_sedang_tidak == 0){
		$p_no11_sedang_tidak = 0.7;
	}
	if($p_no11_lemah_tidak == 0){
		$p_no11_lemah_tidak = 0.7;
	}
	
	//Peluang no12
	$p_no12_kuat_ya = $count['no12_kuat_ya'] / $count['kuat'];
	$p_no12_sedang_ya = $count['no12_sedang_ya'] / $count['sedang'];
	$p_no12_lemah_ya = $count['no12_lemah_ya'] / $count['lemah'];
	if($p_no12_kuat_ya == 0){
		$p_no12_kuat_ya = 0.7;
	}
	if($p_no12_sedang_ya == 0){
		$p_no12_sedang_ya = 0.7;
	}
	if($p_no12_lemah_ya == 0){
		$p_no12_lemah_ya = 0.7;
	}
	
	$p_no12_kuat_tidak = $count['no12_kuat_tidak'] / $count['kuat'];
	$p_no12_sedang_tidak = $count['no12_sedang_tidak'] / $count['sedang'];
	$p_no12_lemah_tidak = $count['no12_lemah_tidak'] / $count['lemah'];
	if($p_no12_kuat_tidak == 0){
		$p_no12_kuat_tidak = 0.7;
	}
	if($p_no12_sedang_tidak == 0){
		$p_no12_sedang_tidak = 0.7;
	}
	if($p_no12_lemah_tidak == 0){
		$p_no12_lemah_tidak = 0.7;
	}
	
	//Peluang no13
	$p_no13_kuat_ya = $count['no13_kuat_ya'] / $count['kuat'];
	$p_no13_sedang_ya = $count['no13_sedang_ya'] / $count['sedang'];
	$p_no13_lemah_ya = $count['no13_lemah_ya'] / $count['lemah'];
	if($p_no13_kuat_ya == 0){
		$p_no13_kuat_ya = 0.7;
	}
	if($p_no13_sedang_ya == 0){
		$p_no13_sedang_ya = 0.7;
	}
	if($p_no13_lemah_ya == 0){
		$p_no13_lemah_ya = 0.7;
	}
	
	$p_no13_kuat_tidak = $count['no13_kuat_tidak'] / $count['kuat'];
	$p_no13_sedang_tidak = $count['no13_sedang_tidak'] / $count['sedang'];
	$p_no13_lemah_tidak = $count['no13_lemah_tidak'] / $count['lemah'];
	if($p_no13_kuat_tidak == 0){
		$p_no13_kuat_tidak = 0.7;
	}
	if($p_no13_sedang_tidak == 0){
		$p_no13_sedang_tidak = 0.7;
	}
	if($p_no13_lemah_tidak == 0){
		$p_no13_lemah_tidak = 0.7;
	}
	
	//Peluang no14
	$p_no14_kuat_ya = $count['no14_kuat_ya'] / $count['kuat'];
	$p_no14_sedang_ya = $count['no14_sedang_ya'] / $count['sedang'];
	$p_no14_lemah_ya = $count['no14_lemah_ya'] / $count['lemah'];
	if($p_no14_kuat_ya == 0){
		$p_no14_kuat_ya = 0.7;
	}
	if($p_no14_sedang_ya == 0){
		$p_no14_sedang_ya = 0.7;
	}
	if($p_no14_lemah_ya == 0){
		$p_no14_lemah_ya = 0.7;
	}
	
	$p_no14_kuat_tidak = $count['no14_kuat_tidak'] / $count['kuat'];
	$p_no14_sedang_tidak = $count['no14_sedang_tidak'] / $count['sedang'];
	$p_no14_lemah_tidak = $count['no14_lemah_tidak'] / $count['lemah'];
	if($p_no14_kuat_tidak == 0){
		$p_no14_kuat_tidak = 0.7;
	}
	if($p_no14_sedang_tidak == 0){
		$p_no14_sedang_tidak = 0.7;
	}
	if($p_no14_lemah_tidak == 0){
		$p_no14_lemah_tidak = 0.7;
	}
	
	//Peluang no15
	$p_no15_kuat_ya = $count['no15_kuat_ya'] / $count['kuat'];
	$p_no15_sedang_ya = $count['no15_sedang_ya'] / $count['sedang'];
	$p_no15_lemah_ya = $count['no15_lemah_ya'] / $count['lemah'];
	if($p_no15_kuat_ya == 0){
		$p_no15_kuat_ya = 0.7;
	}
	if($p_no15_sedang_ya == 0){
		$p_no15_sedang_ya = 0.7;
	}
	if($p_no15_lemah_ya == 0){
		$p_no15_lemah_ya = 0.7;
	}
	
	$p_no15_kuat_tidak = $count['no15_kuat_tidak'] / $count['kuat'];
	$p_no15_sedang_tidak = $count['no15_sedang_tidak'] / $count['sedang'];
	$p_no15_lemah_tidak = $count['no15_lemah_tidak'] / $count['lemah'];
	if($p_no15_kuat_tidak == 0){
		$p_no15_kuat_tidak = 0.7;
	}
	if($p_no15_sedang_tidak == 0){
		$p_no15_sedang_tidak = 0.7;
	}
	if($p_no15_lemah_tidak == 0){
		$p_no15_lemah_tidak = 0.7;
	}
	
	//Peluang no16
	$p_no16_kuat_ya = $count['no16_kuat_ya'] / $count['kuat'];
	$p_no16_sedang_ya = $count['no16_sedang_ya'] / $count['sedang'];
	$p_no16_lemah_ya = $count['no16_lemah_ya'] / $count['lemah'];
	if($p_no16_kuat_ya == 0){
		$p_no16_kuat_ya = 0.7;
	}
	if($p_no16_sedang_ya == 0){
		$p_no16_sedang_ya = 0.7;
	}
	if($p_no16_lemah_ya == 0){
		$p_no16_lemah_ya = 0.7;
	}
	
	$p_no16_kuat_tidak = $count['no16_kuat_tidak'] / $count['kuat'];
	$p_no16_sedang_tidak = $count['no16_sedang_tidak'] / $count['sedang'];
	$p_no16_lemah_tidak = $count['no16_lemah_tidak'] / $count['lemah'];
	if($p_no16_kuat_tidak == 0){
		$p_no16_kuat_tidak = 0.7;
	}
	if($p_no16_sedang_tidak == 0){
		$p_no16_sedang_tidak = 0.7;
	}
	if($p_no16_lemah_tidak == 0){
		$p_no16_lemah_tidak = 0.7;
	}
	
	$kuat = round(($p_no1_kuat_ya * $p_no2_kuat_ya * $p_no3_kuat_ya * $p_no4_kuat_ya * $p_no5_kuat_ya
			* $p_no6_kuat_ya * $p_no7_kuat_ya * $p_no8_kuat_ya * $p_no9_kuat_ya * $p_no10_kuat_ya
			 * $p_no11_kuat_ya * $p_no12_kuat_ya * $p_no13_kuat_ya * $p_no14_kuat_ya * $p_no15_kuat_ya
			  * $p_no16_kuat_ya),4);
			  
	$sedang = round(($p_no1_sedang_ya * $p_no2_sedang_ya * $p_no3_sedang_ya * $p_no4_sedang_ya * $p_no5_sedang_ya
			* $p_no6_sedang_ya * $p_no7_sedang_ya * $p_no8_sedang_ya * $p_no9_sedang_ya * $p_no10_sedang_ya
			 * $p_no11_sedang_ya * $p_no12_sedang_ya * $p_no13_sedang_ya * $p_no14_sedang_ya * $p_no15_sedang_ya
			  * $p_no16_sedang_ya),4);
			  
	$lemah = round(($p_no1_lemah_ya * $p_no2_lemah_ya * $p_no3_lemah_ya * $p_no4_lemah_ya * $p_no5_lemah_ya
			* $p_no6_lemah_ya * $p_no7_lemah_ya * $p_no8_lemah_ya * $p_no9_lemah_ya * $p_no10_lemah_ya
			 * $p_no11_lemah_ya * $p_no12_lemah_ya * $p_no13_lemah_ya * $p_no14_lemah_ya * $p_no15_lemah_ya
			  * $p_no16_lemah_ya),4);
	
	echo "Kuat : $kuat<br>";
	echo "Sedang : $sedang<br>";
	echo "Lemah : $lemah<br>";
	
	if (($kuat > $sedang) && ($kuat > $lemah))
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas kuat sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi KUAT";
	}
	else if (($sedang > $kuat) && ($sedang > $lemah))
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas sedang sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi SEDANG";
	}
	else
	{
		echo "Berdasarkan hasil diatas, bahwa nilai probabilitas tertinggi adalah kelas lemah sehingga dapat disimpulkan bahwa pasien tersebut masuk dalam klasifikasi LEMAH";
	}
	?>
	
	<p><br><br>
			<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>
	<p>