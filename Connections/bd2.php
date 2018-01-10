<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bd2 = "localhost";
$database_bd2 = "login";
$username_bd2 = "root";
$password_bd2 = "";
$bd2 = mysql_pconnect($hostname_bd2, $username_bd2, $password_bd2) or trigger_error(mysql_error(),E_USER_ERROR); 
?>