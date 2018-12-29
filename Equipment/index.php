<html>
<title>Data Equipment</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Data Equipment</h2>
                    
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
                        Jenis
                    </th>
                    <th>
                        Jumlah
                    </th>
                    <th>
                        Opsi
                    </th>
                </tr>
                    <?php
                        include"koneksi.php";
                        $no = 1;
                        $data = mysqli_query ($koneksi, " select id_equipment, name, jenis, jumlah from equipment");
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
                        <?php echo $row['jenis']; ?>
                    </td>
                    <td>
                        <?php echo $row['jumlah']; ?>
                    </td>

                    <td>
                        <a href="detail.php?id=<?php echo $row['id_equipment']; ?>">Detail</a> |
                        <a href="edit.php?id=<?php echo $row['id_equipment']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?php echo $row['id_equipment']; ?>">Hapus</a>
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