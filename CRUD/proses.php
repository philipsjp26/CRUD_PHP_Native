<?php
include('Controller/controller.php');
$koneksi = new Database();

$action = $_GET['action'];

if($action == 'delete')
{
    $id = $_GET['id'];
    $koneksi->delete_data($id);
    header('location:view.php');   
}
else if ($action == 'update')
{
    $GET_length = strlen($_POST['nomor_telepon']);
    var_dump($GET_length);
    if($GET_length == 12)
    {
        $koneksi->update($_POST['id'],$_POST['nim'],
        $_POST['nama_lengkap'],$_POST['kota_asal'],
        $_POST['tanggal_lahir'], $_POST['tanggal_lahir'],
        $_POST['nama_ortu'], $_POST['alamat_ortu'],$_POST['kodepos'],
        $_POST['nomor_telepon'],$_POST['status']
        );
        header('location:view.php');
    }
    else
    {
        echo "'<script>alert('Number Phone must be 12 digits'); window.location = 'view.php';</script>'";
    }
       
}
else if ($action == "tambah")
{
    # Check if only mobile number 12 digits
    $mobile_number = $_POST['nomor_telepon'];
    $GET_length = strlen($mobile_number);
    if ($GET_length == 12)
    {
        if ($_POST['status'] == "WREDA" || $_POST['status'] == "TAMA")
        {
            $STATUS = $_POST['status'];
            $koneksi->tambah_data($_POST['nim'],$_POST['nama_lengkap'],$_POST['kota_asal'],
            $_POST['tanggal_lahir'],$_POST['nama_ortu'],$_POST['alamat_ortu'],$_POST['kodepos'],$_POST['nomor_telepon'],
            $STATUS
            );
            header('location:view.php');
        }
        else
        {
            echo '<script>alert("Cannot add to database")</script>';
            header('location:view.php');
        }
    }
    else{
        echo "'<script>alert('Number Phone must be 12 digits'); window.location = 'view.php';</script>'";
    }
    
}
    
?>