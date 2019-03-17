<?php
if(isset($_GET['simpan'])){
	include('koneksi.php');
	$NIM 		= $_GET['NIM'];
	$Nama		= $_GET['Nama'];
	$Kom		= $_GET['Kom'];
	$Stambuk	= $_GET['Stambuk'];
	$Alasan		= $_GET['Alasan'];
	
	$sql = "UPDATE si SET Nama='$Nama', Kom='$Kom', Stambuk = '$Stambuk', Alasan='$Alasan' WHERE NIM='$NIM'";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		header('location:admin.php');
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>