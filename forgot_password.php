<?php $currentPage = "Passowrd Recovery"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marvel House</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">Marvel House</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link"> SignUp</a> </li>

            </ul>

        </nav>



    <div class="container">
        <div class="content">
            <h2 class="heading">Password Recovery</h2>
            <div class='notification'>You need to wait at lest 20 minutes for another request</div>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="email" class="form-control" placeholder="Email address" name="user-email" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="form-submit" value="RECOVER PASSWORD" name="password-recovery" required>
                </div>
            </form>
        </div>
    </div>

</header>
  <footer class="page-footer font-small blue">
    
  </footer>
  </body>

</html>
