<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BT1635.css">
    <title>Hiển thị ngẫu nhiên N quyển sách bằng PHP</title>
</head>
<body>
<?php
		$book = [];
		$number = rand(1,100);
		for ($i=0; $i < $number; $i++) { 
			$booklist[] = [
				'title' => "Quyen sach $i" ,
				'authorname' => "Tac gia $i" ,
				'price' => rand(1000,10000),
				'nsx' => "Nha Xuat Ban $i"
			];
		}
		
	?>
	<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Author Name</th>
				<th>NSX</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$count = 0;
		foreach ($booklist as $item) {
			echo '<tr>
						<td>'.(++$count).'</td>
						<td>'.$item['title'].'</td>
						<td>'.$item['authorname'].'</td>
						<td>'.$item['nsx'].'</td>
						<td>'.$item['price'].'</td>
					</tr>';
		}
		?>
		</tbody>
			</table>
</body>
</html>