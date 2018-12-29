<html>
<title>Input Data Coffee</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Input Data Coffee</h2>
                    
                </center>
            </p>
            <br>
           
                                    <form role="form" method="post" action="input.php">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <input class="form-control" name="jenis">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>
        </div>
    </div>
</div>
</body>
</html>