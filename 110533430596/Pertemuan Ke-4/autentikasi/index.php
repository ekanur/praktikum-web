<html>
<head>
	<title>Login Page</title>
</head>
<style type="text/css">
.inner{
	margin: 200px auto;
	padding: 20px;
	width: 240px;
	border:1px solid #333;
}
</style>
<body>
<?php 
ini_set("display_errors", 1);
define("VALID", 1);

require_once("auth.php");

init_login();
validate();
 ?>
  <h3>Selamat Datang di Halaman Admin</h3>
//  <p>Menu-menu admin disini</p>
<a href="?m=logout">Logout</a>
</body>
</html>