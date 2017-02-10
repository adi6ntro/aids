<?php

require_once '../inc/config.php';

$username = $_GET['id_pasien'];

$query = "UPDATE data_pasien SET nama_pasien='$_POST[nama_pasien]', konselor_pasien ='$_POST[konselor_pasien]',alamat_pasien='$_POST[alamat_pasien]',
			umur_pasien='$_POST[umur_pasien]',ttl_pasien='$_POST[ttl_pasien]',tgl_konseling='$_POST[tgl_konseling]',notelp_pasien='$_POST[notelp_pasien]',
			dengar_hiv='$_POST[dengar_hiv]', dengar_dari='$_POST[dengar_dari]',terakhir_risk='$_POST[terakhir_risk]',suku_bangsa='$_POST[suku_bangsa]', 
agama_pasien='$_POST[agama_pasien]',status_perkawinan='$_POST[status_perkawinan]' , pendidikan_terakhir = '$_POST[pendidikan_terakhir]', pekerjaan_pasien='$_POST[pekerjaan_pasien]'
		WHERE id_pasien='$username'";
$result = mysql_query($query) or die(mysql_error());

mysql_close();

if ($result > 0) {
	header('Location:user_form_view.php?konfirmasi=1');
} else {
	header('Location:user_form_view.php');
}
?>