<?php
require "dbconn.php";


echo "hello";
if(isset($_POST['signup'])){
    // define variables and set to empty values
$first_name = $last_name = $email = $password = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["first_name"]);
  $email = test_input($_POST["new_email"]);
  $last_name = test_input($_POST["last_name"]);
  $password = test_input($_POST["new_password"]);
  $user_id = test_input($_POST["new_email"]);
  $new_password = test_input($_POST["new_password"]);
}


    $csignup = 0;
    $sql = "insert into testSignUp (id,first_name,last_name,email,password)
            values(NULL,'$name','$last_name','$email','$password')";
    $conn -> exec($sql);

    $sql = "insert into testLogin (id,user_id,password)
            values(NULL,'$user_id','$new_password')";

    $conn -> exec($sql);
    $csignup = 1;

    $conn = null;
    header("location: index.php");
}
?>