<?php
$jam = 19;
$pesan = " oi,Selamat...";

if($jam <=10){
	$pesan .="pagi";
}

elseif($jam >10 && $jam <14){
$pesan .="siang";
}

elseif($jam >14 && $jam <= 18){
$pesan .="sore";}

else{$pesan .="malam";}

 echo $pesan;

?>