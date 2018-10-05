<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','d_modul5');
	$pk = $_SESSION['pk'];
		$sql = "SELECT nama FROM t_jurnal1 WHERE nim = 'pk' ";
		$query = mysqli_query($conn, $sql);
		$hasil = mysqli_fetch_array($query);

		echo $hasil['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>form komentar</title>
</head>
<body>
	          Komentar : <textareatype name="komen"></textarea> 
	          <input type="submit" name="submit" value="Submit">
</body>
</html>

<?php
if(isset($_POST['submit'])){
		$komen = $_POST['komen'];
	$tmbh = mysqli_query($conn, "UPDATE t_jurnal1 SET komen =VALUES ('$nim' , '$nama', '$email', '$komen') " );
	if($inp){
			header("Location: 3.php");
	    }
	    	}
	
?>