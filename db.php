<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan Covid</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['kirim'])){
		$daerah 	= $_POST['daerah'];
		$positif	= $_POST['positif'];
		$rawat		= $_POST['rawat'];
		$sembuh		= $_POST['sembuh'];
		$meninggal	= $_POST['meninggal'];
		$op			= $_POST['operator'];
		$nim		= $_POST['nim'];
	}
 ?>
	<p align="center">Data Pemantauan Covid19 Wilayah Banten</p>
	<p align="center">Per 18 April 2020 2:27</p>
	<p align="center"><?= $op ?> / <?= $nim  ?></p>

	<table width="50%" align="center" border="1" cellpadding="10px" cellspacing="0">
		<tr>
			<th>Daerah</th>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<tr>
			<td><?php echo $daerah ?></td>
			<td><?php echo $positif ?></td>
			<td><?php echo $rawat ?></td>
			<td><?= $sembuh  ?></td>
			<td><?= $meninggal  ?></td>
		</tr>
	</table>
</body>
</html>