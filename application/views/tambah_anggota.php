<?php
if (empty($user)){
  redirect(base_url());
}
else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Tambah Barang</title>
        <link href="<?php echo base_url();?>aset/css/bootstrap.min.css" rel="stylesheet">   
    </head>
    <body>
    <div class="container">
        <h1><center>Tambah Barang</center></h1>
        <div class="col-md-6 offset-md-3">
            <form action="simpan" method="post"> 
                <div class="form-group"> 
                    <label>ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Id">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="user" placeholder="Username">
                </div> 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" class="form-control" name="nohp" placeholder="No Hp">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">OK</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php }?>