<?php
$username = $email = $password = '';
if(!empty($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo 'Username: ' .$username;
    echo '<br/>';
    echo 'Email: ' .$email;
    echo '<br/>';
    echo 'Password: ' .$password;
    echo '<br/>';
}
?>