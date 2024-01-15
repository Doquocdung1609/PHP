<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="BT1590.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi ten</title>
</head>
<body>
    <?php
$fullname = "Do Quoc Dung";
$age = "18";
$address = "Ha Noi";
$email = "doquocdung@gmail.com";


echo "<table>
<tr>
    <th>Ten</th>
    <th>Tuoi</th>
    <th>Dia chi</th>
    <th>Email</th>
</tr>
<tr>
<td>'$fullname'</td>
<td>'$age'</td>
<td>'$address'</td>
<td>'$email'</td>
</tr>
</table>";
    ?>
</body>
</html>