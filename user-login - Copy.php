<?php
    session_start();
    setcookie("PHPSESSID", "helloworld" , ['expires'=>time()+60*60*24, 'path'=>'/','HttpOnly'=>TRUE]);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>e-Talkies</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">e-Talkies</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link"> SignUp</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Login to your account</h1> <br>
            <form class="" action="Plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Login</button>

              </div>
              <div style="text-align:center;">
                 <a href="test.php" class="btn btn-*">don't have account? Sign up now!</a>
                </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">
  </footer>
  </body>

</html>
