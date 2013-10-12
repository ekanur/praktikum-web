<html>
<head>
	<title>Kalkulator PHP</title>
</head>
<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validateForm()
{
var bil1=document.forms["myForm"]["bil1"].value;
var bil2=document.forms["myForm"]["bil2"].value;

if ((bil1==null || bil1=="")||(bil2==null|| bil2==""))
  {
  alert("Kedua inputan harus diisi");
   document.getElementById("bil1").focus();
  return false;
  }
  
  if(cekhuruf(bil1)=== true ||cekhuruf(bil2)===true)
  {
  	alert("Kedua inputan harus berupa angka");
  	 document.getElementById("bil1").focus();
  	return false;
  }


 
  return true;
}
</script>
<body>
<?php 
if (isset($_POST['samadengan'])) {
	$bil1=$_POST["bil1"];
	$bil2=$_POST["bil2"];
	$op=$_POST["op"];
	switch ($op) {
		case '+':
			$hasil=$bil1+$bil2;
			$selected="value='+' selected";
			break;
		case '-':
			$hasil=$bil1-$bil2;
			$selected="value='-' selected";
			break;
		case 'x':
			$hasil=$bil1*$bil2;
			$selected="value='x' selected";
			break;
		case ':':
			$hasil=$bil1/$bil2;
			$selected="value=':' selected";
			break;
		
		default:
			$hasil="Proses salah";
			break;
	}

	
}
 ?>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"  onsubmit="return validateForm()" name="myForm">
		<input type="text" name="bil1" value="<?php echo isset($bil1)?$bil1:' '; ?>"/>
		<select name="op">
			<option <?php echo isset($selected)?$selected:'value="+" '; ?>>+</option>
			<option <?php echo isset($selected)?$selected:'value="-" '; ?>>-</option>
			<option <?php echo isset($selected)?$selected:'value="x" '; ?>>x</option>
			<option <?php echo isset($selected)?$selected:'value=":" '; ?>>:</option>
		</select>
		<input type="text" name="bil2"  value="<?php echo isset($bil2)?$bil2:' '; ?>"/>
		<input type="submit" name="samadengan" value="="/>
		<input type="text" name="hasil" value="<?php echo isset($hasil)?$hasil:' '; ?>"/>
	</form>

</body>
</html>