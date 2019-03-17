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
	<form action="tambah-proses.php" method="get">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="NIM" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama" required></td>
			</tr>
			<tr>
				<td>Kom</td>
				<td>:</td>
				<td><input type="text" name="Kom" required></td>
			</tr>
			<tr>
				<td>Stambuk</td>
				<td>:</td>
				<td><input type="text" name="Stambuk" required></td>
			</tr>
			<tr>
				<td>Alasan Masuk Ilmu Komputer</td>
				<td>:</td>
				<td><textarea name="Alasan"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
		<p> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </p>
		</center>
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