<?php
# db configuration 
define('DB_HOST', 'mysql.peterju.com');
define('DB_USER', 'petor');
define('DB_PASS', 'wegucciboys');
define('DB_NAME', 'wiydb');

# db connect
function dbConnect($close=true){
	global $link;

	if (!$close) {
		mysql_close($link);
		return true;
	}

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
	if (!mysql_select_db(DB_NAME, $link))
		return false;
}

?>