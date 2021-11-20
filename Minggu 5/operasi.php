<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Minggu 5</title>
</head>

<body>
	<?php

	$a = $_GET['bil1'];
	$b = $_GET['bil2'];


	if(isset($_GET['calculator']) ){

		function tambah($a, $b)
		{
			$hasil = $a + $b;
			return $hasil;
		}

		function kurang($a, $b)
		{
			$hasil = $a - $b;
			return $hasil;
		}

		function kali($a, $b)
		{
			$hasil = $a * $b;
			return $hasil;
		}

		function bagi($a, $b)
		{
			$hasil = $a / $b;
			return $hasil;
		}
		function modulo($a, $b)
		{
			$hasil = $a % $b;
			return $hasil;
		}
		
	?>

		<h1>Berikut ini merupakan hasil setiap operasi</h1>
		<p>dari bilangan berikut, bilangan 1 = <?php echo " $a "; ?> dan bilangan 2 = <?php echo " $b ";?> </p>
		<h3>Perjumlahan</h3>
		<?php echo " ". tambah($a,$b); ?>
		<h3>Pengurangan</h3>
		<?php echo " ". kurang($a,$b); ?>
		<h3>Perkalian</h3>
		<?php echo " ". kali($a,$b); ?>
		<h3>Pembagian</h3>
		<?php echo " ". bagi($a,$b); ?>
		<h3>Modulus</h3>
		<?php echo " ". modulo($a,$b); 

	}
	?>

</body>
</html>