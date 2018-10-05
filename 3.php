<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','d_modul5');
	$pk = $_SESSION['pk'];
		$sql = "SELECT * FROM t_jurnal1 WHERE nim = 'pk' ";
		$query = mysqli_query($conn, $sql);
		$hasil = mysqli_fetch_array($query);

		echo "Nama : ".$hasil['nama']."<br>";
		echo "Komentar : ".$hasil['Komen']."<br>";
		echo "Email : ".$hasil['email']."<br>";

		session_destroy();


?>