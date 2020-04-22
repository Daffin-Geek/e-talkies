<?php
session_start();
if(!empty($_SESSION['id']) == ''){
    header("Location: user-login.php");
    die();
}
//$week = new DateTime('+1 day')
setcookie( 'key', 'value', time() + 86400, '/' , null, true, true )
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>e-Talkies-Account</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
             <span class="navbar-text">e-Talkies</span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="homepage.php" class="nav-link">Home</a> </li>

               <li class="nav-item"> <a href="logout.php" class="nav-link">Logout</a> </li>
             </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Enter full name' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='".$result['phone']."'>
          <br>
          <label><b>Date of Birth : </b></label>
          <input type='date' class='from-control' placeholder='Enter Date of Birth' name='dob' value='".$result['DOB']."'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>


              <br><br>
              <label><b>Email Id : </b>".$result['email']."</label>
              <br><br>
              <a href='accountp.php'>Change Password</a>



              ";
         ?>




      </div>

    </body>

  </html>
