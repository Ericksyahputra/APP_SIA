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
 'admin',
 '$password',
 'Adminstrator',
 'admin@gmail.com',
 'admin',
 'admin'
 )
 ";
if ($koneksi->query($query)) {
    echo "Data user berhasil di tambah";
} else {
    echo "Data user gagal di tambah";
}
mysqli_close($koneksi);
