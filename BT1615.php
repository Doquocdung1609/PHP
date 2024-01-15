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
    <label>User Name</label>
    <br/>
    <input required = "true" type="text" name="username" value = "<?= $username ?>">
    <br/>
    <label>Email</label>
    <br/>
    <input required = "true" type="email" name="email" value = "<?= $email ?>">
    <br/>
    <label>Password</label>
    <br/>
    <input required = "true" type="password" name="password" value = "<?= $password ?>">
    <br/>
    <button>Register</button>



    </form>


</body>
</html>