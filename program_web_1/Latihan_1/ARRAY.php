<?php
$mobil = array("volvo,bmw,toyota");
print_r($mobil);
echo "<br>".$mobil[0];
echo "<hr>";


$Mbem = (object)array("M1"=>"volvo","M2"=>"BMW","M3"=>"toyota");
print_r($Mbem);
echo "<br>".$Mbem->M2;

?>