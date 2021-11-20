<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Minggu 5</title>
</head>

<body>

<h1>bilangan prima</h1>
<?php
    for($bilangan=1;$bilangan<=50;$bilangan++){ 
        $temp = 0; 
        for($i=1;$i<=$bilangan;$i++){ 
            if($bilangan % $i == 0){ 
                $temp++;
            }
        }
        if($temp == 2){ 
         echo $bilangan.' ';
        }
    }
?>

</body>
</html>
