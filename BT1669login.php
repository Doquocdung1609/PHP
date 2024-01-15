

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
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
    if(!empty($_POST)){
$email1 = $_POST['email'];
$pass1 = $_POST['password'];
$check_email1 = $_COOKIE['email'];
$check_pass1 = $_COOKIE['password'];
if($check_email1 == $email1 && $check_pass1 == $pass1){
    header('location:BT1669WELCOME.php');
}
elseif($check_email1 != $email1 || $check_pass1 != $pass1) {
    header('location:BT1669FAILED.php');
}

    }
    ?>
<form method = "post" >
    <h2>Input detailt information</h2>
    <br/>
    <label>Email</label>
    <br/>
    <input required = "true" type="email" name="email" >
    <br/>
    <label>Password</label>
    <br/>
    <input required = "true" type="password" name="password" >
    <br/>
    <button >LOG IN</button>
</body>
</html>