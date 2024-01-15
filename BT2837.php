<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thư viên bằng PHP</title>
</head>
<body>
    <?php
$N = rand(3,15);
$bookList = [];
for($i = 0; $i<$N;$i++){
    $book = [ 
        'title' => 'Book ' . ($i + 1),
        'thumbnail' => 'thumbnail' . ($i + 1),
        'price' => rand(10, 100) 
    ];
    $bookList[] = $book;
}

echo'<table border = "1">';
echo'<tr>
<th>Title</th>
<th>Thumbnail</th>
<th>Price</th>
</tr>';

foreach($bookList as $book){
    echo '<tr>';
    echo '<td>' .$book["title"]. '</td>';
    echo '<td>' .$book["thumbnail"]. '</td>';
    echo '<td>' .$book["price"]. '</td>';
    echo '</tr>';
}
    ?>
</body>
</html>