<html>
<head>
	<title>Sistem Informasi Lab</title>
	
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
  
		<div id="menu">
			<ul>
				<li> <a href="index.php">Home</a> </li>
				<li> <a href="admin.php">Admin</a> </li>
			</ul>
		</div>
	<div id="content">
	<p> </p>
	<h2>
	<div class="textwidget"><a href="tambah_data.php">Tambah Data</a></div>
	</h2>
	<p> </p>
	<center>	
	<style>
		table,th,td{
		border:1px solid black;
		}
	</style>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#cccccc">
			<td>NIM</td>
			<td>Nama</td>
			<td>Kom</td>
			<td>Stambuk</td>
			<td>Alasan Masuk Ilmu Komputer</td>
			<td>Opsi</td>
		</tr>
		
		<?php 
		include "koneksi.php";
		$sql 	= "SELECT * FROM si order by nim asc";
		$query  = mysqli_query($koneksi,$sql);
		while($rows = mysqli_fetch_array($query)){
		?>
		
		<tr>
			<td><?php echo $rows['NIM']; ?></td>
			<td><?php echo $rows['Nama']; ?></td>
			<td><?php echo $rows['Kom']; ?></td>
			<td><?php echo $rows['Stambuk']; ?></td>
			<td><?php echo $rows['Alasan']; ?></td>
			<td>
				<a class="edit" href="edit_data.php?NIM=<?php echo $rows['NIM']; ?>"> Edit Data </a> |
				<a class="hapus" href="hapus.php?NIM=<?php echo $rows['NIM']; ?>"> Hapus Data </a>
			</td>
		</tr>
	
	<?php 
		}
	?>
	</table>
		<p> </p>
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