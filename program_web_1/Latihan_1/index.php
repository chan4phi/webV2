<?PHP
echo "hello bang";
//
$nama =" faisal";


$nama .=" faisal argus";
$nama .=" faisal argus <br><br>";
echo $nama ;

// ++ = icrement (ditambah satu)
// -- = decrement (dikurang satu)

$a = 8;
$b = 5;
$print = "";

$c = $a+$b;
$print = "$a+$b hasilnya $c<br><br>";

$c = $a-$b;
$print .= "$a-$b hasilnya $c<br><br>";

$c = $a/$b;
$print .= "$a/$b hasilnya $c<br><br>";

$c = $a*$b;
$print .= "$a*$b hasilnya $c<br><br><br>";

echo $print;


echo "Perhitungan luas Segitiga <br><br>";

$alas = 50;
$tinggi = 20;
$print = "";

$hasil = 1/2*$alas*$tinggi;
$print = "1/2*$alas*$tinggi = $hasil";
echo $print;






?>