<?php
session_start();
if(!empty($_SESSION['id']) == ''){
    header("Location: user-login.php");
    die();
}
if (isset($_POST['upload'])) {

  include 'dbh.php';

  $targetvid = "video-uploads/".basename($_FILES['video']['name']);
  $target = "uploads/".basename($_FILES['image']['name']);
  $name = strtolower($_POST['mname']);
  $rdate = $_POST['release'];
  $genre = strtolower($_POST['genre']);
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $video = $_FILES['video']['name'];
  $imagetype = $_FILES['image']['type'];
  $videotype = $_FILES['video']['type'];
  $uploaded_image_ext  = substr( $image, strrpos( $image, '.' ) + 1);
  $uploaded_video_ext  = substr( $video, strrpos( $video, '.' ) + 1);

  $sql = "INSERT INTO movies (name, rdate, genre, runtime, decription, imgpath, videopath)
    VALUES('$name','$rdate','$genre','$rtime','$desc','$image','$video')";

  mysqli_query($conn,$sql);

  if(strtolower(( $uploaded_image_ext ) == 'jpg' || strtolower( $uploaded_image_ext ) == 'jpeg' || strtolower( $uploaded_image_ext ) == 'png') && ( $imagetype == 'image/jpeg' || $imagetype == 'image/png' )){

    if(( strtolower( $uploaded_video_ext ) == 'mp4' || strtolower( $uploaded_video_ext ) == 'avi' || strtolower( $uploaded_video_ext ) == 'mkv' ) && ( $videotype == 'video/mp4' || $videotype == 'video/avi' || $videotype == 'video/mkv') ){


          if (move_uploaded_file($_FILES['image']['tmp_name'],$target) && move_uploaded_file($_FILES['video']['tmp_name'],$targetvid)) {
            header("Location: homepage.php");
          }else {
            echo "error uploading";
          }

}
}
else {
    echo "error uploading";
}

}


?>
