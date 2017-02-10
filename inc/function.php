<?php 
require_once 'config.php';
function insert($table,$field_value){
	foreach($field_value as $key=>$val){
		$field[] = $key;
		$value[] = "'".addslashes($val)."'";
	}
	$sql = "insert into $table(".implode(',',$field).") values(".implode(',',$value).")";
	$query=mysql_query($sql);
	return true;

}
?>