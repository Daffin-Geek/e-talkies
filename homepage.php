<?php
session_start();
if(!empty($_SESSION['id']) == ''){
    header("Location: user-login.php");
    die();
}
//$week = new DateTime('+1 day')
//setcookie( 'key', 'value', time() + 86400, '/' , null, null, true )
 //setcookie('key','value', time()+86400,'/','/', localhost, TRUE, TRUE);
//setcookie('PHPSESSID', $hash , ['expires'=>time()+60*60*24, 'path'=>'/','HttpOnly'=>TRUE]);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head style='background-color:#000000;'>
  <meta charset="utf-8">
  <title>e-Talkies-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body style='background-color:#000000;'>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">e-Talkies</span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
            
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>

                   <li class='nav-item'><a href=# class='nav-link'>".ucwords($rel['name'])." </a></li>
                   <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                 
                  </ul>
                 
                  </nav>
                  
                  <div class='container-fluid'>
                  <br><br><br>";
                  

              echo"<h1 style='color:white;position:sticky;font-size: 80px; border-style: solid;border-color: #343a40;background-color: #343a40;'>Unlimited movies, TV shows and more. </h1>
                  </div>
                  </header>
                  <section>

                  
                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;background-color:#1C1C1C;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='font-size:25px;color:white;'>Last Seen :
                    <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                  </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron" style="background-color:#1C1C1C;">
        <h2 style='margin-top:0px;padding-top:0px;color:white;'>Latest uploaded</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron" style="background-color:#1C1C1C;">
        <h2 style="color:white;">  All movies</h2>
          <?php
            include 'fetcher.php';
            ?>
      </div>
  </section >
  <footer class="page-footer font-small blue" >
  </footer>
  </body>
</html>
