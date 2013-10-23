<?php
session_start();
if (isset($_SESSION['login'])){
$sesiku = $_SESSION['login'];	
}
else
{$sesiku="";}

if(isset($sesiku))
{
unset($sesiku);
session_destroy();
echo 'Anda telah logout. Silahkan <a href="index.php">Login</a> kembali.';
}
else
{
echo 'Anda belum login. Silahkan <a href="index.php">Login</a> dulu.';
}
?>