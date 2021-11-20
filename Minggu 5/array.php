<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Minggu 5</title>
</head>

<body>

<h1>sort array</h1>

<?php
	$data = array("larine", "aduh", "toda", "anevi", "samid", "kifuit","demiit", "lapan", "bilan", "puluu");
	sort($data);

	$length = count($data);
	for($i = 0; $i < $length; $i++) {
		echo $data[$i];
		echo "<br>";
	}
?>

</body>
</html>