<html>
<head>
	<title>Tabel Generator</title>
</head>
<body>
<?php 
$baris=5;
$kolom=1;

function generator($b, $k)
{

echo "<table border='1'>";

	for ($i=1; $i <=$b ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=$k ; $j++) { 
			echo"<td>".$j."</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

}

generator($baris, $kolom);
 ?>
</body>
</html>