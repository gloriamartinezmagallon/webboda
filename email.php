<?php

$emailsubject = $_POST['email-subject'];
$emailmessage = $_POST['email-message'];

$host_name = "db404613754.db.1and1.com";
$database = "db404613754";
$user_name = "dbo404613754";
$password = "cr3sp00";


$connect = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
} else {
    $result= mysqli_query($connect, "INSERT INTO msgboda(fecha, subject, message) VALUES ('" . date('Y-m-d H:i:s') . "','" . $emailsubject . "','" . $emailmessage . "')");
    if  ($result) echo 'OK!';
    else echo mysqli_error ($connect);
}


