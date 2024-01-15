<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="BT2938.css">
    <script>
        function calculateTotal() {
            var price = document.getElementById('price').value;
            var quantity = document.getElementById('quantity').value;
            var totalPrice = price * quantity;
            document.getElementById('totalPrice').value = totalPrice;
        }
    </script>
</head>
<body>

<?php
// Kiểm tra xem đã submit form chưa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý thêm sản phẩm
    if (isset($_POST['add'])) {
        $productName = $_POST['productName'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $totalPrice = $price * $quantity;

        // Kiểm tra xem có sản phẩm trong Cookie chưa
        if (isset($_COOKIE['products'])) {
            $products = json_decode($_COOKIE['products'], true);
        } else {
            $products = [];
        }

        // Thêm sản phẩm mới vào mảng
        $products[] = [
            'productName' => $productName,
            'category' => $category,
            'price' => $price,
            'quantity' => $quantity,
            'totalPrice' => $totalPrice,
        ];

        // Lưu mảng sản phẩm vào Cookie
        setcookie('products', json_encode($products), time() + 3600, '/');

    } elseif (isset($_POST['delete'])) {
        // Xử lý xoá sản phẩm
        $index = $_POST['index'];

        // Lấy danh sách sản phẩm từ Cookie
        $products = json_decode($_COOKIE['products'], true);

        // Xoá sản phẩm tại vị trí $index
        unset($products[$index]);

        // Lưu lại danh sách sản phẩm vào Cookie
        setcookie('products', json_encode(array_values($products)), time() + 3600, '/');
    }
}

// Hiển thị danh sách sản phẩm
if (isset($_COOKIE['products'])) {
    $products = json_decode($_COOKIE['products'], true);
    if (!empty($products)) {
        echo '<h3>Management Product:</h3>';
        echo '<table>';
        echo '<tr><th>STT</th><th>Tên sản phẩm</th><th>Loại sản phẩm</th><th>Giá</th><th>Số lượng</th><th>Tổng giá</th></tr>';
        foreach ($products as $index => $product) {
            echo '<tr>';
            echo '<td>' . ($index + 1) . '</td>';
            echo '<td>' . $product['productName'] . '</td>';
            echo '<td>' . $product['category'] . '</td>';
            echo '<td>' . $product['price'] . '</td>';
            echo '<td>' . $product['quantity'] . '</td>';
            echo '<td>' . $product['totalPrice'] . '</td>';
            echo '<td><form method="post" action="BT2938edit.php"><input type="hidden" name="index" value="' . $index . '"><input type="submit" name="edit" value="Sửa" class="edit"></form></td>';
            echo '<td><form method="post" action="BT2938.php"><input type="hidden" name="index" value="' . $index . '"><input type="submit" name="delete" value="Xoá" class="clear"></form></td>';            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>Không có sản phẩm nào.</p>';
    }
}
?>
<div class="contain">
<h3>Input product's detail information</h3>
<form method="post" action="BT2938.php">
    <label for="productName">Tên sản phẩm:</label>
    <br>
    <input type="text" name="productName" required><br>
    
    <label for="category">Loại sản phẩm:</label>
    <br>
    <select name="category">
        <option value="Apple">Apple</option>
        <option value="Samsung">Samsung</option>
        <option value="LG">LG</option>
        <option value="Sony">Sony</option>
        <option value="Google">Google</option>
    </select><br>
    
    <label for="price">Giá:</label>
    <br>
    <input type="number" name="price" id="price" oninput="calculateTotal()" required><br>
    
    <label for="quantity">Số lượng:</label>
    <br>
    <input type="number" name="quantity" id="quantity" oninput="calculateTotal()" required><br>
    
    <label for="totalPrice">Tổng giá:</label>
    <br>
    <input type="text" name="totalPrice" id="totalPrice" readonly><br>
    
    <input type="submit" name="add" value="ADD" class="add">
    <input type="reset" value="RESET" class="reset">
</form>
</div>

</body>
</html>
