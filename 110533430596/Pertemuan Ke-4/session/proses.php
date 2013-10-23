<?php
session_start();
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username = $_POST['username'];
$password = $_POST['password'];
}
else
{
	$username="";
	$password="";
}

if ($username == 'test' && $password == 'pas123')
{
$_SESSION['login'] = $username;
echo 'Anda login sebagai '.$_SESSION['login'].'<br>';
echo 'Silahkan klik <a href="sesi.php">Logout</a> untuk keluar.';
}
else
{
echo 'Login gagal, username atau password salah<br>';
echo 'Klik <a href="index.php">Login</a> untuk mencoba lagi.';
}
?>