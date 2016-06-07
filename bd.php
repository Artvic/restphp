<?php
$url=getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$host= $url . ":" . $port;
$user=getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$pwd=getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

$db="restphp";

$connection = new mysqli ($host, $user, $pwd, $db);

?>
