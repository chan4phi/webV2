<form method="POST" action="proses/produk_add.php" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Produk</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Nama Produk" name="nama">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control"  placeholder="Harga" name="harga">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">QTY/Stok</label>
    <div class="col-sm-10">
      <input type="number" class="form-control"  placeholder="Stok" name="qty">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
      <input type="file" class="btn btn-outline-danger"  placeholder="col-form-label" name="gambar">
    </div>
  </div>
  

<div class="button" ALIGN="CENTER" >
<button type="submit" class="btn btn-outline-primary" >Input</button>
</div>
  </form>
 