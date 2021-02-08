<?php
header( 'Location:your real website') ;
$ip = $_SERVER['REMOTE_ADDR'];
$fo = fopen("ip.txt", "a");
$fw = fwrite($fo, "$ip\n");
fclose($fo);
?>