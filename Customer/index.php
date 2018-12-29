<html>
<title>Data Customer</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Data Customer</h2>
                    
                </center>
            </p>
            <br>
            <p>
                <a class="btn btn-primary" href="tambah.php">Tambah</a>
            </p>
            <table class="table table-bordered">
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Telepon
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Opsi
                    </th>
                </tr>
                    <?php
                        include"koneksi.php";
                        $no = 1;
                        $data = mysqli_query ($koneksi, " select id_cust, name, address,phone, email from customer");
                        while ($row = mysqli_fetch_array ($data))
                        {
                    ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['address']; ?>
                    </td>
                    <td>
                        <?php echo $row['phone']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <a href="detail.php?id=<?php echo $row['id_cust']; ?>">Detail</a> |
                        <a href="edit.php?id=<?php echo $row['id_cust']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?php echo $row['id_cust']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>