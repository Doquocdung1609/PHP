<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng trong PHP</title>
</head>
<body>
    <?php
   function dayso($N){
    $randomarray = [];
    for($i=0;$i< $N; $i++){
        $randomarray[] = rand(1,100);
    }
    return $randomarray;
   }
   function sortarray($array){
    sort($array);
    return $array;
   }
   $N = 10;
   $randomarray = dayso($N);
   echo "Mang truoc khi sap xep: ". implode(", ", $randomarray) . "<br/>";
   $sortarray = sortarray($randomarray);
   echo "Mang sau khi sap xep: " .implode(",", $sortarray). "\n";
   ?>
</body>
</html>