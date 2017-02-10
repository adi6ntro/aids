<?php
require_once '../inc/config.php';
//MENANGKAP VARIABLE FIELD DITABLE YANG DIKIRIM DENGAN METHODE POST
$konselor_pasien = $_POST['konselor_pasien'];
$tgl_konseling = $_POST['tgl_konseling'];
$nama_pasien = $_POST['nama_pasien'];
$umur_pasien = $_POST['umur_pasien'];
$ttl_pasien = $_POST['ttl_pasien'];
$alamat_pasien = $_POST['alamat_pasien'];
$notelp_pasien = $_POST['notelp_pasien'];
$kelamin_pasien = $_POST['kelamin_pasien'];
$alasan_tes = $_POST['alasan_tes'];
$tahu_vct = $_POST['tahu_vct'];
$dengar_hiv = $_POST['dengar_hiv'];
$dengar_dari = $_POST['dengar_dari'];
$pengetahuan_hiv = $_POST['pengetahuan_hiv'];
$risk_penularan = $_POST['risk_penularan'];
$pasangan_sex = $_POST['pasangan_sex'];
$kelamin_pasangan = $_POST['kelamin_pasangan'];
$terakhir_risk = $_POST['terakhir_risk'];
$suku_bangsa = $_POST['suku_bangsa'];
$agama_pasien = $_POST['agama_pasien'];
$status_perkawinan = $_POST['status_perkawinan'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$pekerjaan_pasien = $_POST['pekerjaan_pasien'];
$tindak_lanjut = $_POST['tindak_lanjut'];
$lama_konseling = $_POST['lama_konseling'];
$status_risk = $_POST['status_risk'];
$keluhan_pasien = $_POST['keluhan_pasien'];
$situasi_konseling = $_POST['situasi_konseling'];



/*$query_validasi = "SELECT * FROM user WHERE nama_pasien='".$nama_pasien."'";
$result_validasi = mysql_query($query_validasi);

$query_validasi_final = mysql_fetch_array($result_validasi);
echo $query_validasi_final['nama_pasien'];

if ($query_validasi_final['nama_pasien']!="") {
echo "<script>alert('Data sudah ada!');
		location.href='user_form_insert.php';
		</script>";
		
} else if ($query_validasi_final['nama_pasien']=="") {*/

$query = "INSERT INTO data_pasien 
(konselor_pasien,tgl_konseling,nama_pasien,umur_pasien,ttl_pasien,alamat_pasien,
notelp_pasien,kelamin_pasien,alasan_tes,tahu_vct,dengar_hiv,dengar_dari,
pengetahuan_hiv,risk_penularan,pasangan_sex,kelamin_pasangan,terakhir_risk,suku_bangsa,
agama_pasien,status_perkawinan,pendidikan_terakhir,pekerjaan_pasien,tindak_lanjut,
lama_konseling,status_risk,keluhan_pasien,situasi_konseling) 
VALUES('".$konselor_pasien."','".$tgl_konseling."','".$nama_pasien."','".$umur_pasien."','".$ttl_pasien."',
'".$alamat_pasien."','".$notelp_pasien."','".$kelamin_pasien."','".$alasan_tes."','".$tahu_vct."',
'".$dengar_hiv."','".$dengar_dari."','".$pengetahuan_hiv."','".$risk_penularan."','".$pasangan_sex."',
'".$kelamin_pasangan."','".$terakhir_risk."','".$suku_bangsa."','".$agama_pasien."','".$status_perkawinan."',
'".$pendidikan_terakhir."','".$pekerjaan_pasien."','".$tindak_lanjut."','".$lama_konseling."','".$status_risk."',
'".$keluhan_pasien."','".$situasi_konseling."')";

echo $query;

/*$query = "INSERT INTO data_pasien 
(konselor_pasien,tgl_konseling,
kelamin_pasien,risk_penularan) 
VALUES('".$konselor_pasien."','".$tgl_konseling."',
'".$kelamin_pasien."','".$risk_penularan."')";*/

$result = mysql_query($query);


//header('Location:user_form_insert.php?konfirmasi=1');

//}
?>