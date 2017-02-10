<?php
require_once '../inc/config.php';

$id_pasien = $_GET['id_pasien'];

$query = "DELETE FROM data_pasien WHERE id_pasien='".$id_pasien."'";
$result = mysql_query($query) or die(mysql_error());

mysql_close();

header('Location:user_form_view.php');


?>