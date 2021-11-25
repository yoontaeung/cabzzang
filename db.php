<?php

$conn = mysqli_connect("localhost", "root", "123456", "cabzzang");

if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
}