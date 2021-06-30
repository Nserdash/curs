<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','ger1976ser1999');
define('DB_NAME','internet-store');
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysql->connect_errno) exit('������ ����������� � ��');
$mysql->set_charset('utf8');

?>