<?php

include_once('config.php');

mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME);

$items_per_group = 5;

include_once('func/blog.php');

?>