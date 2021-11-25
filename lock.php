<?php
include 'testdb.php';
  session_start();
  $user_check=$_SESSION['login_user'];

  $ses_sql=mysqli_query($conn, "SELECT id FROM tester WHERE id='$user_check'");

  $row=mysqli_fetch_array($ses_sql);

  $login_session=$row['id'];

  if(!isset($login_session))
  {
    echo "<script>alert('로그인하고 이용하세요!')</script>";
    header("Location: newLogin.php");
  }

?>
