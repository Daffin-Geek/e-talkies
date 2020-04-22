<?php
  session_start();
  include 'dbh.php';                
    $fname = htmlspecialchars(strtolower($_POST['fname']));
    $lname =  htmlspecialchars(strtolower($_POST['lname']));
    $name = $fname." ".$lname;
    $phn =  htmlspecialchars($_POST['phn']);
    $email =  htmlspecialchars($_POST['mail']);
    $username =  htmlspecialchars($_POST['mail']);
    $password =  htmlspecialchars($_POST['pass']);
    $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 11));
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;
    $sql = "INSERT INTO user1(username, passwd, name, phone, email, DOB)
    values('$username','$hash','$name','$phn','$email','$dob')";
    $result = $conn->query($sql);

    header("Location: user-login.php");
?>
