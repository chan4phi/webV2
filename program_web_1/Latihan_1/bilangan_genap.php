<?php
$bil = 12;
$survei ="Survei Mengatakan...";


if($bil%2 == 0 ){
	$survei .="$bil itu genap";
}else{
	$survei .="$bil itu ganjil";
}


echo $survei;




?>