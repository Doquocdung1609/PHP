<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng các số nguyên từ 0 tới N bằng PHP</title>
</head>
<body>
    <?php
        $n = rand(1,100);
        echo "So n = ".$n;
        echo "<br/>";
        $sum = 0;
        for($i = 0;$i<$n;$i++){
            $sum = $sum + $i; 
        }
        echo "tong = " .$sum;

    ?>
</body>
</html>