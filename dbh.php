<?php
  $conn = mysqli_connect("localhost","root","","jtv");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
