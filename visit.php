<?php
session_start();
include 'testdb.php';

$id = $_POST['id'];
$irum = $_POST['irum'];
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$profile = $_POST['profile'];

$sql = "INSERT INTO tester (id, irum, pw1, pw2, birth, phone, profile) 
VALUES ('$id', '$irum','$pw1','$pw2', '$birth', '$phone', '$profile')";

$result = mysqli_query($conn, $sql);

header("Location: index.html")


?>