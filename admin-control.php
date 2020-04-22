<?php
session_start();
if(!empty($_SESSION['id']) == ''){
    header("Location: user-login.php");
    die();
}

if (isset($_POST['upload'])) {

  include 'dbh.php';

  $target_file = "video-uploads/".basename($_FILES['video']['name']);
  $name = htmlspecialchars(strtolower($_POST['mname']));
  $rdate = htmlspecialchars($_POST['release']);
  $genre = htmlspecialchars(strtolower($_POST['genre']));
  $rtime = $_POST['rtime'];
  $desc = htmlspecialchars($_POST['desc']);
  $video = $_FILES['video']['name'];
  $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));  

  
  //Checking for whitelisted extensions
  if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" && $FileType != "mp4" && $FileType != "avi") {
      echo "Sorry, only Video files are allowed.";
  } else {
      move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);
      echo "The file has been uploaded.";  
      $sql = "INSERT INTO movies (name, rdate, genre, runtime, decription, videopath) VALUES('$name','$rdate','$genre','$rtime','$desc','$video')";
      mysqli_query($conn,$sql);
  }
  
}

?>
