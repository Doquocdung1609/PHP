<?php
 require_once('config.php');

//  Su dung function nay de insert, update, delete
 function execute($sql){
    // create connection toi database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    // query
    mysqli_query($conn, $sql);
    // dong connection 
    mysqli_close($conn);
 }
//  su dung cho select => tra ve ket qua
function executeResult($sql){

// create connection toi database
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
// query
$resultset = mysqli_query($conn, $sql);
$list = [];
while($row = mysqli_fetch_array($resultset, 1)){
    $list[] = $row;
}
// dong connection 
mysqli_close($conn);

return $list;
}
?>

