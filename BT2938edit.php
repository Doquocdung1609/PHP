<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinh Sua Page</title>
    <link rel="stylesheet" href="BT2938.css">
</head>
<body>
    
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['edit'])) {
        $index = $_POST['index'];

        // Lấy danh sách sản phẩm từ Cookie
        $products = json_decode($_COOKIE['products'], true);

        // Lấy thông tin sản phẩm cần chỉnh sửa
        $productToEdit = $products[$index];

        // Hiển thị form chỉnh sửa thông tin sản phẩm
        echo '<h3>Chỉnh sửa sản phẩm:</h3>';
        echo '<form method="post" action="BT2938update.php">';
        echo '<input type="hidden" name="index" value="' . $index . '">';
        echo '<label for="productName">Tên sản phẩm:</label>';
        echo '<input type="text" name="productName" value="' . $productToEdit['productName'] . '" required><br>';

        echo '<label for="category">Loại sản phẩm:</label>';
        echo '<select name="category">';
        $categories = ['Apple', 'Samsung', 'LG', 'Sony', 'Google'];
        foreach ($categories as $category) {
            echo '<option value="' . $category . '"';
            if ($category === $productToEdit['category']) {
                echo ' selected';
            }
            echo '>' . $category . '</option>';
        }
        echo '</select><br>';

        echo '<label for="price">Giá:</label>';
        echo '<input type="number" name="price" value="' . $productToEdit['price'] . '" required><br>';

        echo '<label for="quantity">Số lượng:</label>';
        echo '<input type="number" name="quantity" value="' . $productToEdit['quantity'] . '" required><br>';

        echo '<label for="totalPrice">Tổng giá:</label>';
        echo '<input type="text" name="totalPrice" value="' . $productToEdit['totalPrice'] . '" readonly><br>';

        echo '<input type="submit" name="update" value="Cập nhật">';
        echo '</form>';
    }
}
?>
