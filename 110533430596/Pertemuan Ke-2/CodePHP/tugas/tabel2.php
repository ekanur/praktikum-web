<html>
<head>
	<title>Tabel Generator 1.1.0</title>
</head>
<body>
<?php 
$cell=10;
$kolom=4;

function generator($jum_cell, $k)
{

echo "<table border='1'>";
$x=1;
	for ($i=1; $i <=ceil($jum_cell/$k); $i++) { 

		echo "<tr>";
		for ($j=1; $j <=$k ; $j++) { 
			if ($x<=$jum_cell) {
				echo"<td>".$x."</td>";
			}
			else
			{
				echo " ";
			}
			
			$x++;
		}
		// $x=$x+$k;
		echo "</tr>";
	}

	echo "</table>";

}

generator($cell, $kolom);
 ?>
</body>
</html>