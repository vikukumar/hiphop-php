<?php
require_once("connect.inc");

$db = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$qry=$db->stmt_init();
$qry->prepare("SELECT REPEAT('a',100000)");
$qry->execute();
$qry->bind_result($text);
$qry->fetch();
if ($text !== str_repeat('a', ($IS_MYSQLND || mysqli_get_server_version($db) > 50110)? 100000:(mysqli_get_server_version($db)>=50000? 8193:8191))) {
	var_dump(strlen($text));
}
echo "Done";
?>