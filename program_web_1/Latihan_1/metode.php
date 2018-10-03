<form action="metode.php" method="GET">
<input type="text" name="nama">
<input type="submit" value="kirim">
</form>
<?php
if(isset($_GET['nama']))
	echo $_GET['nama'];

?>