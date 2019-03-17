<?php
	include 'koneksi.php';
	$NIM	 = $_GET['NIM'];
	$Nama	 = $_GET['Nama'];
	$Kom	 = $_GET['Kom'];
	$Stambuk = $_GET['Stambuk'];
	$Alasan	 = $_GET['Alasan'];
	
	$sql = "INSERT INTO si(NIM,Nama,Kom,Stambuk,Alasan)
			Values($NIM,'$Nama','$Kom','$Stambuk','$Alasan')";
	$query = mysqli_query($koneksi,$sql);
	
	if($query){
		echo "	<script>
					window.alert('Data Berhasil diinputkan');
				</script>
		";
		echo "<a href='admin.php'>Kembali ke halaman Admin</a>";
	}
	else{
		echo "Error";
	}
?>
