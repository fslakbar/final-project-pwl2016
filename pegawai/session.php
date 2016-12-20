<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");

// Seleksi Database
$db = mysql_select_db("petshop", $connection);

session_start();// Memulai Session

// Menyimpan Session
$user_check=$_SESSION['login_user'];

// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select * from pegawai where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama'];
$id_peg = $row['id_pegawai'];
$username = $row['username'];
$password =$row['password'];
$keahlian =$row['keahlian'];
$jk =$row['jk'];
$alamat =$row['alamat'];

if(!isset($login_session)){
	mysql_close($connection); // Menutup koneksi
	header('Location: dashboard.php'); // Mengarahkan ke Home Page
}
?>