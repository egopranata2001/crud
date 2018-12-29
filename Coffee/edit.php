<html>
<title>Ubah Data Coffee</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
    <?php
            include"koneksi.php";
            $data = mysqli_query ($koneksi, " select
                                                    id_barang,
                                                    name,
                                                    jenis,
                                                    jumlah
                                              from
                                              coffee
                                              where id_barang = $_GET[id]");
            $row = mysqli_fetch_array ($data);
    ?>
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Ubah Data Coffee</h2>
                   
                </center>
            </p>
            <br>
            
           
                                    <form role="form" method="post" action="update.php">
                                        <div class="form-group">
                                            <label>ID Barang</label>
                                            <input class="form-control" name="id" value="<?php echo $row['id_barang']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <input class="form-control" name="jenis" value="<?php echo $row['jenis']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" value="<?php echo $row['jumlah']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>

        </div>
    </div>
</div>
</body>
</html>