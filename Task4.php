<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task4</title>
</head>
<body>
    <?php
     for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){
            echo $j % 2;
    }  echo "<br>";     
}
    ?>
</body>
</html>