<?php   
include('Controller/controller.php');
$db = new Database();
$get_data = $db->view_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
        <center>
        <a href="add_data.php">Tambah Data</a>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama Lengkap</th>
                    <th>Kota Asal</th>
                    <th>Tanggal lahir</th>
                    <th>Nama Orang Tua</th>
                    <th>Alamat</th>
                    <th>Kodepos</th>
                    <th>Nomor telepon</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                    $no=1;
                    foreach($get_data as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['kota_asal']; ?></td>
                    <td><?php echo $row['tanggal_lahir']; ?></td>
                    <td><?php echo $row['nama_ortu']; ?></td>
                    <td><?php echo $row['alamat_ortu']; ?></td>
                    <td><?php echo $row['kodepos']; ?></td>
                    <td><?php echo $row['nomor_telepon']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
                        <a href="proses.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>
                
                    <?php }; ?>
            </table>
        </center>
</body>
</html>