<html>
<head>
	<title>Sistem Informasi Lab</title>
	
	<style>
		table,th,td{
		border:1px solid black;
		}
	</style>
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css">
</head>

 <body>
	<body background = "picture.jpg">
	<div id="layout">
		<div id="header">
		<p> </br> </p>
			<h1>
				<center> <span class="hr">Daftar Mahasiswa Lab SI 5</span> </center>
			</h1>
		</div>
	</div>
	
	<?php
		include('koneksi.php');
		$nim = $_GET['NIM'];
		$sql = "SELECT * FROM si where NIM='$nim'";
		$query = mysqli_query($koneksi,$sql);
		$data = mysqli_fetch_array($query);
	?>
	
	<form action="edit-proses.php" method="get">
	<input type="hidden" name="NIM" value="<?php echo $nim; ?>">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="Nama" size="15" 
			value="<?php echo $data['Nama']; ?>" 
			required></td>
		</tr>
		<tr>
			<td>Kom</td>
			<td>:</td>
			<td><input type="text" name="Kom" size="15" 
			value="<?php echo $data['Kom']; ?>" 
			required></td>
		</tr>
		<tr>
			<td>Stambuk</td>
			<td>:</td>
			<td><input type="text" name="Stambuk" size="100" 
			value="<?php echo $data['Stambuk']; ?>" 
			required></td>
		</tr>
		<tr>
			<td>Alasan Masuk Ilmu Komputer</td>
			<td>:</td>
			<td><input type="text" name="Alasan" size="100" 
			value="<?php echo $data['Alasan']; ?>" 
			required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="simpan" 
			value="Simpan"></td>
		</tr>
	</table>
	</form>
		<p> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </p>
	<center>
	</div>
	
	<div id="footer">
			<div class="wrap-footer">
				<div class="container">
					<div class="row"> 
						<div class="textwidget">Ros Indah Mawarini - 171401060</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row">
					
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>