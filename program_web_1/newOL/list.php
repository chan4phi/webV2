
<?php include "koneksi.php";?>
<div class="container">
  <h2>Ini Tabel</h2>
  <p>Cintailah Ploduk-ploduk Indonesia</p>                                                                                      
  <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Gambar</th>
		<th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
       
      </tr>
    </thead>
    <tbody>
	
	<?php 
	$query = "select * from produk";
	$res = mysql_query($query);
	$no=1;
	while($row=mysql_fetch_array($res)){
	?>
      <tr>
        <td><?php echo $row['produkid'];?></td>
        <td><img src="<?php echo $row['gambar'];?>" width="80"> </td>
        <td><?php echo $row['NamaProduk'];?></td>
        <td><?php echo $row['harga'];?></td>
		<td><?php echo $row['Qty'];?></td>
        
      </tr>
	<?php } ?>
    </tbody>
  </table>
  </div>
</div>


