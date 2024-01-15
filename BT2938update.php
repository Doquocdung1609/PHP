<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $index = $_POST['index'];

        // Lấy danh sách sản phẩm từ Cookie
        $products = json_decode($_COOKIE['products'], true);

        // Cập nhật thông tin sản phẩm
        $products[$index]['productName'] = $_POST['productName'];
        $products[$index]['category'] = $_POST['category'];
        $products[$index]['price'] = $_POST['price'];
        $products[$index]['quantity'] = $_POST['quantity'];
        $products[$index]['totalPrice'] = $_POST['price'] * $_POST['quantity'];

        // Lưu lại danh sách sản phẩm vào Cookie
        setcookie('products', json_encode(array_values($products)), time() + 3600, '/');

        // Chuyển hướng về trang danh sách sản phẩm
        header('Location: BT2938.php');
        exit();
    }
}
?>
