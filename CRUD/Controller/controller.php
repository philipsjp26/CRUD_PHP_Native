<?php 

class Database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "bura_crud";
    var $koneksi = "";
    
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()){
            echo "Failed to connect database : " . mysqli_connect_errno();
        }
    }
    function view_data()
    {
        $hasil = [];
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_data");
        while($row = mysqli_fetch_array($data))
        {
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data($nim,$nama_lengkap,$kota_asal,$tanggal_lahir,$nama_ortu,$alamat_ortu,$kodepos,$nomor_telepon,$status)
    {
        $ex = mysqli_query($this->koneksi, "INSERT INTO tb_data values ('','$nim','$nama_lengkap','$kota_asal','$tanggal_lahir','$nama_ortu','$alamat_ortu','$kodepos','$nomor_telepon','$status')");
        if (!$ex){
            $data = "Gagal tambah data";
            return $data;
        }
    }
    function delete_data($id)
    {
        $ex = mysqli_query($this->koneksi, "DELETE FROM tb_data where id='$id'");
        if (!$ex)
        {
            $data = "Gagal Delete data";
            return $data;
        }
    }
}

?>