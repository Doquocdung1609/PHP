<?php
        $username = $email = $password = '';
        if(!empty($_POST)){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BT1594.css">
    <title>Form đăng ký tài khoản bằng PHP</title>
</head>
<body>
    <form method = "post" action = "welcome.php">
    <h2>Input detailt information</h2>
    <br/>
    <label>User Name: </label>
    <td><?= $username ?></td>
    <br/>
    <label>Email: </label>
    <td><?= $email ?></td>
    <br/>
    <label>Password: </label>
    <td><?=$password?><a href="BT1615.php">Edit</td>
    <br/>