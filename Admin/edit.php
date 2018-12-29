<html>
<title>Ubah Data Admin</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
    <?php
            include"koneksi.php";
            $data = mysqli_query ($koneksi, " select
                                                    id_admin,
                                                    name,
                                                    phone,
                                                    email
                                              from
                                              admin
                                              where id_admin = $_GET[id]");
            $row = mysqli_fetch_array ($data);
    ?>
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Ubah Data Admin</h2>
                   
                </center>
            </p>
            <br>
            
           
                                    <form role="form" method="post" action="update.php">
                                        <div class="form-group">
                                            <label>ID Admin</label>
                                            <input class="form-control" name="id" value="<?php echo $row['id_admin']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon" value="<?php echo $row['phone']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>

        </div>
    </div>
</div>
</body>
</html>