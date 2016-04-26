<?php
// we connect to localhost
$link = mysql_connect('mysqlcluster11', 'rayaera', 'Maricela1765');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>