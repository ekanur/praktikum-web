<html>
<head>
	<title>Greeting</title>
</head>
<body>
<?php 
$jam=19.00;

if ($jam>=00.01 && $jam<10.00 ) {
	echo "Selamat pagi, semangat PAGI";
}
else if ($jam>=10.00 && $jam<15.00) {
	echo "Selamat Siang, Tetap semangat yaa";
}
else if ($jam>=15.00 && $jam<18.00) {
	echo "Selamat sore, santai dulu";
}
else if ($jam>=18.00 && $jam<23.59) {
	echo "selamat malam, selamat istirahat";
}
 ?>
</body>
</html>