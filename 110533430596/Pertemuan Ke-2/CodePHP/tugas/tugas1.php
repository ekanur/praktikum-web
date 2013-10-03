<html>
<head>
	<title>Passing By Value & Passing By Reference</title>
</head>
<body>
<?php 
function byValue($var1)
{
	$var1=$var1+2;

	return $var1;

}

function byRef(&$var1)
{
	$var1=$var1+2;

	return $var1;
}

$varbyValue=5;
$varbyRef=5;
 byValue($varbyValue);
 byRef($varbyRef);

echo "isi varbyValue=".$varbyValue;
echo "<br/>";
echo "isi varbyref=".$varbyRef;
 ?>
</body>
</html>