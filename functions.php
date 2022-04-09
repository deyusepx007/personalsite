<?php
$koneksi = mysqli_connect("localhost","root","","Portofolio_ysp");
$a = mysqli_query($koneksi,"SELECT * FROM user");
$b = mysqli_query($koneksi,"SELECT * FROM About");

function data($isi){
    global $koneksi;
    $c = mysqli_query($koneksi,$isi);
    $box = [];
    while($lakukan = mysqli_fetch_assoc($c)){
        $box[] = $lakukan;
    }
    return $box;
}

function tambah($data){
    global $koneksi;
    $email = $data["Email"];
    $nama = $data["Nama_k"];
    $pesan = $data["Pesan"];
    
    $query = "INSERT INTO Contact
                VALUES
                (NULL,'$email','$nama','$pesan')
                ";
                mysqli_query($koneksi,$query);
                return mysqli_affected_rows($koneksi);
}

?>