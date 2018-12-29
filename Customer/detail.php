<html>
<title>Detail Data Customer</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
 
<?php
    include"koneksi.php";
    $no = 1;
    $data = mysqli_query ($koneksi, " select
                                            id_cust,
                                            name,
                                            address,
                                            phone,
                                            email
                                      from
                                      customer
                                      where id_cust = $_GET[id]");
    $row = mysqli_fetch_array ($data);
   
?>
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Detail Data Customer</h2>
                    
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
                        Alamat
                    </td>
                    <td>
                        : <?php echo $row['address']; ?>
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