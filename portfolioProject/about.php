<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manning's Fitness</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/about.css">
  </head>
  <body>
    <header>
      <h1>Manning's Fitness</h1>
      <nav class = "navbar navbar-expand-md navbar-custom">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon my-toggler"></span>
         </button>

        <div class = "collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="checkOut.php">Check Out</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        </ul>
      </div>
    </nav>
    </header>
    <main>
      <br>
      <div id="banner">
        <div id="bannerMessage">
          <h1>About<br>
          Manning's Fitness</h1>
        </div>
      </div>
      <br>
      <div class="about">
        <h3>Here at Manning's Fitness, we care about YOU!<h3><br><br>

        <p>Manning’s Fitness has an important mission for its people. The company’s Mission is to be able to help its people live a healthy life in an affordable way with their products.</p>
      </div>
      <br>
      <div id= "banner">
        <div id="bannerMessage" style="padding-top: 10px; padding-bottom: 10px;">
          <h1>Manning's Fitness</h1>
        </div>
      </div>

      <br><br>
    </main>

    <footer>

      <img src = "images/logo.png" width = "20px" alt = "Manning's Fitness Logo">

      <p>Manning's Fitness<br>
                          101 NW 8th Street<br>
                          Grimes, IA 50111<br>
                          515-986-4078</p>

      <img src = "images/logo.png" alt = "Manning's Fitness Logo">


    </footer>
  </body>
</html>
