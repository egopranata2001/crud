<html>
<title>Detail Data Admin</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
 
<?php
    include"koneksi.php";
    $no = 1;
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
                    <h2>Detail Data Admin</h2>
                    
                </center>
            </p>
            <br>
            <p>
                <a class="btn btn-success" href="index.php">Kembali</a>
            </p>
            <table class="table table-stripped">
                <tr>
                    <td style="width:10%;">
                        Nama
                    </td>
                    <td>
                        : <?php echo $row['name']; ?>
                    </td>
                </tr>
                <tr>       
                    <td>
                        Telepon
                    </td>
                    <td>
                        : <?php echo $row['phone']; ?>
                    </td>
                </tr>
                <tr>       
                    <td>
                        Email
                    </td>
                    <td>
                        : <?php echo $row['email']; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>