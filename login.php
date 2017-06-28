<?php
require "dbconn.php";

if(isset($_POST['sign_in_btn'])){
    $user_id = $password = "";

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = test_input($_POST["user_email"]);
        $new_password = test_input($_POST["user_password"]);
}

    $stmt = $conn->prepare("select password from testLogin where user_id = '$user_id'"); 
    $stmt->execute();

    $result = $stmt->fetch();
    if($result[0] === $new_password){
        header("location: home.php");
    }
    else{
        header("location: index.php");
    }
}
?>