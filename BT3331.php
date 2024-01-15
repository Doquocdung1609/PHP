<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ôn luyện Array PHP</title>
</head>
<body>
    <?php
    //1
    $N = rand(2,10);
    //2
     $bookList = [];
    for($i = 0; $i<$N;$i++){
        $book = [ 
            'title' => 'Book ' . ($i + 1),
            'author' => 'author' . ($i + 1),
            'price' => rand(10, 100),
            'date' => date('Y-m-d', strtotime("-{$i} days")),
        ];
        $bookList[] = $book;
    }
    //3
    function display($n){
        global $bookList;
        echo'<table border = "1">';
        echo'<tr>
        <th>Title</th>
        <th>Thumbnail</th>
        <th>Price</th>
        <th>Date</th>
        </tr>';
       
        foreach ($bookList as $book){
            echo '<tr>';
            echo '<td>' .$book["title"]. '</td>';
            echo '<td>' .$book["author"]. '</td>';
            echo '<td>' .$book["price"]. '</td>';
            echo '<td>' .$book["date"]. '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo "<br/>";
    }
    //4
    $index  =  rand(0, $N-1);
    echo "<br/>Bang index: <br/>";
    display($index);
    //5
    unset($bookList[$index]);
    echo "<br/>Sau khi xoa: <br/>";
    display($bookList);
    //6
   $newbook = [
    'title' => 'Newbook ' ,
    'author' => 'newauthor',
    'price' => rand(10, 100),
    'date' => date('Y-m-d', strtotime("-{$i} days")),
   ];
   array_splice($bookList,$index,0,[$newbook]);
   echo"<br/>Sau khi chen <br/>";
   display($bookList);
   //7
  

   //8
   $bookList = [];
   echo "Danh sach sau khi xoa";
   display($bookList);
    ?>
</body>
</html>