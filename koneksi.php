<?php
	$koneksi = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($koneksi,'si');

	if(!$koneksi){
		echo "Koneksi Gagal";
	}
	if(!$db){
		echo "Database Gagal";
	}
?>
          