<?php include 'koneksi.php';?>
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
			<center>
				<table cellpadding="5" cellspacing="0" border="1">
					<tr bgcolor="#cccccc">
						<th> <center> NIM </center> </th>
						<th> <center> Nama </center> </th>
						<th> <center> Kom </center> </th>
						<th> <center> Stambuk </center> </th>
						<th> <center> Alasan Masuk Ilmu Komputer </center> </th>
					</tr>
			
			<?php 
				$sql = "SELECT * FROM si order by nim asc";
				$query = mysqli_query($koneksi,$sql);
				while($tampil=mysqli_fetch_array($query)){ ?>

			<tr>
				<td> <?php echo $tampil['NIM']; ?> </td>
				<td> <?php echo $tampil['Nama']; ?> </td>
				<td> <?php echo $tampil['Kom']; ?> </td>
				<td> <?php echo $tampil['Stambuk']; ?> </td>
				<td> <?php echo $tampil['Alasan']; ?> </td>
			</tr>
			<?php
				}
			?>
			
			</table>
				<p> </p>
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