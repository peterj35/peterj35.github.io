<?php

$config['db_host'] = 'mysql.peterju.com';
$config['db_user'] = 'petor';
$config['db_pass'] = 'wegucciboys';
$config['db_name'] = 'ttacblog';

foreach ($config as $k => $v) {
	define(strtoupper($k), $v);
}

?>
