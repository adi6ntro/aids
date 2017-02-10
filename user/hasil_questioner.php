<?php
require_once '../inc/config.php';
require_once '../inc/function.php';
include '../template/header.php';

$sql ="select (no1a+no2a+no3a+no4a+no5a) as E,
		 (no1b+no2b+no3b+no4b+no5b) as I,
		 (no6a+no7a+no8a+no9a+no10a) as S,
		 (no6b+no7b+no8b+no9b+no10b) as N,
		 (no11a+no12a+no13a+no14a+no15a) as T,
		 (no11b+no12b+no13b+no14b+no15b) as F,
		 (no16a+no17a+no18a+no19a+no20a) as J,
		 (no16b+no17b+no18b+no19b+no20b) as P
from(
select sum(case
				when no1 ='a' then 1 else 0 end)as no1a,
		 sum(case
				when no2 ='a' then 1 else 0 end)as no2a,
		 sum(case
				when no3 ='a' then 1 else 0 end)as no3a,
		 sum(case
				when no4 ='a' then 1 else 0 end)as no4a,
		 sum(case
				when no5 ='a' then 1 else 0 end)as no5a,
		 sum(case
				when no1 ='b' then 1 else 0 end)as no1b,
		 sum(case
				when no2 ='b' then 1 else 0 end)as no2b,
		 sum(case
				when no3 ='b' then 1 else 0 end)as no3b,
		 sum(case
				when no4 ='b' then 1 else 0 end)as no4b,
		 sum(case
				when no5 ='b' then 1 else 0 end)as no5b,
		 sum(case
				when no6 ='a' then 1 else 0 end)as no6a,
		 sum(case
				when no7 ='a' then 1 else 0 end)as no7a,
		 sum(case
				when no8 ='a' then 1 else 0 end)as no8a,
		 sum(case
				when no9 ='a' then 1 else 0 end)as no9a,
		 sum(case
				when no10 ='a' then 1 else 0 end)as no10a,
		 sum(case
				when no6 ='b' then 1 else 0 end)as no6b,
		 sum(case
				when no7 ='b' then 1 else 0 end)as no7b,
		 sum(case
				when no8 ='b' then 1 else 0 end)as no8b,
		 sum(case
				when no9 ='b' then 1 else 0 end)as no9b,
		 sum(case
				when no10 ='b' then 1 else 0 end)as no10b,
		sum(case
				when no11 ='a' then 1 else 0 end)as no11a,
		 sum(case
				when no12 ='a' then 1 else 0 end)as no12a,
		 sum(case
				when no13 ='a' then 1 else 0 end)as no13a,
		 sum(case
				when no14 ='a' then 1 else 0 end)as no14a,
		 sum(case
				when no15 ='a' then 1 else 0 end)as no15a,
		 sum(case
				when no11 ='b' then 1 else 0 end)as no11b,
		 sum(case
				when no12 ='b' then 1 else 0 end)as no12b,
		 sum(case
				when no13 ='b' then 1 else 0 end)as no13b,
		 sum(case
				when no14 ='b' then 1 else 0 end)as no14b,
		 sum(case
				when no15 ='b' then 1 else 0 end)as no15b,
		 sum(case
				when no16 ='a' then 1 else 0 end)as no16a,
		 sum(case
				when no17 ='a' then 1 else 0 end)as no17a,
		 sum(case
				when no18 ='a' then 1 else 0 end)as no18a,
		 sum(case
				when no19 ='a' then 1 else 0 end)as no19a,
		 sum(case
				when no20 ='a' then 1 else 0 end)as no20a,
		 sum(case
				when no16 ='b' then 1 else 0 end)as no16b,
		 sum(case
				when no17 ='b' then 1 else 0 end)as no17b,
		 sum(case
				when no18 ='b' then 1 else 0 end)as no18b,
		 sum(case
				when no19 ='b' then 1 else 0 end)as no19b,		 
		 sum(case
				when no20 ='b' then 1 else 0 end)as no20b
			  from questioner3 where id_pasien='".$_GET['id_pasien']."'
			  ) a";
$query= mysql_query($sql);
$row = mysql_fetch_array($query);
$data = mysql_num_rows($query);
#print_r($row);
#echo $sql;
#die;
#$data[] = $row;

if(isset($row['E'])){

$e = $row['E'];
$i = $row['I'];
$t = $row['T'];
$f = $row['F'];
$s = $row['S'];
$n = $row['N'];
$j = $row['J'];
$p = $row['P'];

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
<p><?php echo "E=".$e. " I=".$i. "S=".$s. " N=".$n. " T=".$t. " F=".$f." J=".$j. " P=".$p; ?></p>

<?php
	if ($e>$i){
		$hasil1= "E";
		$hasil_1="Extrovert";
		
	}else if ($e<$i){
		$hasil1= "I";
		$hasil_1="Introvert";		
	}
	if ($t>$f){
		$hasil2= "T";
		$hasil_2="Thinking";
		
	}else if ($t<$f){
		$hasil2= "F";
		$hasil_2="Feeling";		
	}
	if ($s>$n){
		$hasil3= "S";
		$hasil_3="Sensation";
		
	}else if ($s<$n){
		$hasil3= "N";
		$hasil_3="Intuitif";		
	}
	if ($j>$p){
		$hasil4= "J";
		$hasil_4="Judgment";
		
	}else if ($j<$p){
		$hasil4= "P";
		$hasil_4="Perception";		
	}
?>

<p>Maka Sifat yang dimiliki adalah</p>

<p><?php	$rangkum= $hasil1."".$hasil3."".$hasil2."".$hasil4;
	    	echo $hasil1." ".$hasil3." ".$hasil2." ".$hasil4; ?><p> 
<p><?php    echo $hasil_1." ".$hasil_3." ".$hasil_2." ".$hasil_4; ?><p>
<?php 
$sql1 ="select * from keterangan_hasil where tipe='".$rangkum."'";
$query1=mysql_query($sql1);
$row1 = mysql_fetch_array($query1);
echo "<p align='justify'>".$row1['keterangan']."</p>";

}
else{ 
echo "<p> Pasien tersebut belum mengisi kuisioner </p>";
}
?>
<p><br><br>
		<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>
<p>

</div>
</body>
</html>

