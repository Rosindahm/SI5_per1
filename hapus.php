<?php
	include 'koneksi.php';
	$NIM = $_GET['NIM'];
	$delete = mysqli_query($koneksi,"DELETE FROM si where NIM='$NIM'");
	
	if($delete){
		header('location:admin.php');
	}
?>