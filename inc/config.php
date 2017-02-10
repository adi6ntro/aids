<?php
define('server', 'localhost:3307');
define('username', 'root');
define('password', '');
define('database', 'db_aids');

mysql_connect(server,username,password) or die(mysql_error());
mysql_select_db(database) or die(mysql_error());

?>
