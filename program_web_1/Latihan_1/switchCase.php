<?php
$print="Jadwal Di hari minggu";

echo $print ;
echo "<br><br>";
$favcolor = 20;

switch($favcolor){
	case ($favcolor <=10);
	echo "pagi waktunya nonton spongebob";
	break;
	case ($favcolor >10 && $favcolor <14);
	echo "siang waktunya makan ";
	break;
	case ($favcolor >14 && $favcolor <= 18);
	echo "sore waktunya tidur";
	break;
	case ($favcolor >18 && $favcolor <= 24);
	echo "malem itu jamnya nonton tayo";
	break;
	
	default:
	echo "anda salah alam";
	
}

?>