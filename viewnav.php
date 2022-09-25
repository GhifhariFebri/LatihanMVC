<?php
session_start();
if(!isset($_SESSION['listkaryawan'])) $_SESSION['listkaryawan'] = [];
if(!isset($_SESSION['listoffice'])) $_SESSION['listoffice'] = [];
if(!isset($_SESSION['listofficeemplo'])) $_SESSION['listofficeemplo'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewemployee.php">Employee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewoffice.php">Office</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewofficeemplo.php">Office-Employee</a>
      </li>
    </ul>
  </div>
</nav>
<br>
</body>
</html>