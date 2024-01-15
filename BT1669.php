


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sử dụng cookie trong PHP - quản lý đăng ký & đăng nhập tài khoản trong PHP</title>
    <style type="text/css">
        body{
    padding: 0px;
    margin: 0px;
}
form{
    border-radius: 2% ;
    border: solid 2px blue;
    padding: 0px;
    margin: 0px;
    
    
}
label{
    margin-left: 10px;
    font-weight: bold;
}
h2{
    padding: 10px;
    margin: 0px;
    width: 100%;
    background-color: blue;
    color: white;

}
input{
    width: 96%;
    margin-left: 10px;
}
button{
    margin-left: 10px;
    font-weight: bold;
    padding: 5px;
    margin-top: 10px;
    background-color: green;
    color: white;
    cursor: pointer;
}
button:hover{
    background-color: greenyellow;
}

td{
    margin-left: 10px;
    border: 2px solid grey;
}

    </style>
</head>
<body>
    <?php
    $username = $email = $password = $address = "";
    if(isset($_POST['username'])){
    $username = $_POST['username'];
    setcookie('username',$username,time() + 20000, '/');
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        setcookie('email',$email,time() + 20000, '/');
        }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
        setcookie('address',$address,time() + 20000, '/');
        }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        setcookie('password',$password,time() + 20000, '/');
        }
       
    ?>
<form method = "post">
    <h2>Input detailt information</h2>
    <br/>
    <label>User Name</label>
    <br/>
    <input required = "true" type="text" name="username" >
    <br/>
    <label>Email</label>
    <br/>
    <input required = "true" type="email" name="email" >
    <br/>
    <label>Password</label>
    <br/>
    <input required = "true" type="Password" name="password" >
    <br/>
    <label>Address</label>
    <br/>
    <input required = "true" type="address" name="address" >
    <br/>
    <button>Register</button>
    <button onclick="document.location='BT1669login.php'">LOGIN</button>
</form>
</body>
</html>