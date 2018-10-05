
<!DOCTYPE html>
<html>
<head>
	<title>Form pendaftaran</title>
</head>
<body>
	<form method="post" action="#">
		<input type="" name="nim" required="required" placeholder="Nomor Induk Mahasiswa"><br><br>
		<input type="text" name="nama" required="required" placeholder="Nama"><br><br>
		<input type="email" name="email" required="required" placeholder="Email"></input><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];

	$conn = mysqli_connect('localhost','root','','d_modul5');
	$inp = mysqli_query($conn, "INSERT INTO t_jurnal1 VALUES ('$nim' , '$nama', '$email', '') " );
	if($inp){
			header("Location: form2.php");
	    }
	    	}
	
?>