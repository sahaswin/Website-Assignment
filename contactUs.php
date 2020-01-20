<?php
include 'dbconn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['num'];
$msg = $_POST['msg'];

$sql = "INSERT INTO contactdata(name, email, num, msg) 
VALUES ('$name', '$email', '$num', '$msg')";
$result = $conn->query($sql);

header("Location: Contact.html");

?>