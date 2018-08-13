<?php

# FileName="Connection_php_mysql.htm"

# Type="MYSQL"

# HTTP="true"

				$hostname_conecta = "localhost";

				$database_conecta = "ajuda";

				$username_conecta = "root";

				$password_conecta = "rub32912289";

$conecta = mysql_connect($hostname_conecta, $username_conecta, $password_conecta) or trigger_error(mysql_error(),E_USER_ERROR);

$db = mysql_select_db($database_conecta);

?>
