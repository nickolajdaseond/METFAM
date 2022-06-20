<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>METFAM</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo1.png" alt=""> </a>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> Войти</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron" style="background-color:black ;">
            <h1>Пожалуйста, <br> Зарегистрируйтесь сначала </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block" >Зарегистрироваться сейчас</a>
          </div>
        </div>
      </div>

      </header>



    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="">pcuong1235@gmail.com</a>
      </div>

    </footer>
  </body>
</html>
