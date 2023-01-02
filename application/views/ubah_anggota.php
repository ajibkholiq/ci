
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ubah Barang</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url();?>aset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><center>Ubah Barang</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('anggota/ubah');?>" method="post"> 
                <div class="form-group"> 
                    <input type="hidden" class="form-control" name="id" placeholder="Id" value="<?php echo $id_anggota ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo $username ?>">
                </div> 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $nama ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $alamat ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" class="form-control" name="nohp" placeholder="No Hp" value="<?php echo $no_hp ?>">
                </div>
                <br>
                 <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</body>
</html>