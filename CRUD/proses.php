<?php
include('Controller/controller.php');
$koneksi = new Database();

$action = $_GET['action'];
var_dump($action);
if($action == 'delete')
{
    $id = $_GET['id'];
    $koneksi->delete_data($id);
    header('location:view.php');   
}
else if ($action == "tambah")
{
    # Check if only mobile number 12 digits
    $mobile_number = $_POST['nomor_telepon'];
    $koneksi->tambah_data($_POST['nim'],$_POST['nama_lengkap'],$_POST['kota_asal'],
    $_POST['tanggal_lahir'],$_POST['nama_ortu'],$_POST['alamat_ortu'],$_POST['kodepos'],$_POST['nomor_telepon'],
    $_POST['status']
    );
    header('location:view.php');

}
?>