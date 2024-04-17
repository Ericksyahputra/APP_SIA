<?php
include_once "koneksi.php";
$password = password_hash('123', PASSWORD_BCRYPT);
$query = "INSERT INTO pengguna (
 username,
 password,
 nama_lengkap,
 email,
jabatan,
 hak_akses
 ) 
 VALUES (
 'erick',
 '$password',
 'Erick Syahputra',
 'erick@gmail.com',
 'Karyawan',
 'karyawan'
 )
 ";
if ($koneksi->query($query)) {
    echo "Data user berhasil di tambah";
} else {
    echo "Data user gagal di tambah";
}
mysqli_close($koneksi);
