<?php
$cireng = 1000;
$esDuren = 15000;
$esMilo = 20000;
$esTeh = 5000;
$piscok = 1000;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas1_2</title>

	<style>
		table,
		th,
		td {
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<table>
		<tr>
			<th>No</th>
			<th>Nama Menu</th>
			<th>Harga</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Cireng</td>
			<td>Rp. <?= $cireng ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Es Duren</td>
			<td>Rp. <?= $esDuren ?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Es Milo</td>
			<td>Rp. <?= $esMilo ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Es Teh</td>
			<td>Rp. <?= $esTeh ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Piscok</td>
			<td>Rp. <?= $piscok ?></td>
		</tr>
	</table>
</body>

</html>