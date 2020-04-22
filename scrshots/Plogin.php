<?php
  session_start();
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  $_POST['pass'];



    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      
    }else {
       //echo '<script>alert("Incorrect User Name or Password")</script>'; 
       echo 'incorrect username/ password please try again.' ;
       header("Location: user-login.php");
      }

    

?>
