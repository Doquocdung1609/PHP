<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci </title>
</head>
<body>
    <?php
    //Day khong nho
    function fibonacci($N){
        if($N <= 1){
            return 1;
        }else{
            return fibonacci($N - 1) + fibonacci($N - 2);
        }
    }
    echo "Day fibonacci khong nho la: \n";
    for($i=0; $i < 10; $i++){
        echo fibonacci($i) ." ";
    }
    echo "\n";
     //Day co nho
     function fibonacci2($N, &$ghinho){
        if($N <= 1){
            return 1;
        }else if(isset($ghinho[$N])){
            return $ghinho[$N];
        }else{
            $ghinho[$N] = fibonacci2($N - 1, $ghinho) + fibonacci2($N - 2, $ghinho);
            return $ghinho[$N];
        }
     }
     echo "<br/> Day fibonacci nho la: \n";
     $ghinho = [];
     for($i = 0; $i < 10; $i++){
        echo fibonacci2($i, $ghinho) . " ";
     }
     echo "\n";
    ?>
</body>
</html>