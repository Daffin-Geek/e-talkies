<?php
  session_start();
  include 'dbh.php';

    $username =  htmlspecialchars($_POST['mail']);
    $password =  ($_POST['pass']);
    $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 11));

    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()) {
     
        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
     
    }else {
    //echo '<script>alert("Incorrect User Name or Password")</script>'; 
       echo 'Incorrect Username/ Password.';
       header("Location: user-login.php");

      }

      

?>
    