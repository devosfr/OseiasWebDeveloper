<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bd2 = "localhost";
$database_bd2 = "u419146787_login";
$username_bd2 = "u419146787_oslog";
$password_bd2 = "musicamusicaxxx";
$bd2 = mysql_pconnect($hostname_bd2, $username_bd2, $password_bd2) or trigger_error(mysql_error(),E_USER_ERROR); 
?>