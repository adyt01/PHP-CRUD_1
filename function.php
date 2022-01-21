<?php 
require_once 'koneksi.php';

//Fungsi Query
function query($query){
    //memanggil variabel global
    global $con;
    $result = mysqli_query($con,$query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

//Fungsi Tambah
function tambah($tambah){
    global $con;
    $nama = $tambah['nama'];
    $hp = $tambah['hp'];
    $tgl_lahir = $tambah['tgl_lahir'];
    $query = "INSERT INTO data_mhs
                VALUES ('','$nama','$hp','$tgl_lahir')
            ";
    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}

//Fungsi Hapus
function hapus($hapus){
    global $con;
    mysqli_query($con, "DELETE FROM data_mhs WHERE id_tes = $hapus");
    return mysqli_affected_rows($con);
}

//Fungsi Edit
function edit($edit){
    global $con;
    $id = $edit['id'];
    $nama = $edit['nama'];
    $hp = $edit['hp'];
    $tgl_lahir = $edit['tgl_lahir'];
    $query = "UPDATE data_mhs SET
                nama = '$nama',
                hp = '$hp',
                tgl_lahir = '$tgl_lahir'
                WHERE id_tes = $id 
            ";
        mysqli_query($con, $query);
        return mysqli_affected_rows($con);
}


?>