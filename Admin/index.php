<html>
<title>Data Admin</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Data Admin</h2>
                    
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
                        $data = mysqli_query ($koneksi, " select id_admin, name, phone, email from admin");
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
                        <?php echo $row['phone']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <a href="detail.php?id=<?php echo $row['id_admin']; ?>">Detail</a> |
                        <a href="edit.php?id=<?php echo $row['id_admin']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?php echo $row['id_admin']; ?>">Hapus</a>
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