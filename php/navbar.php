<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
    <link rel="icon" href="../img/netflix-icon.svg">
    <title>FlixNet</title>
    <?php include "../php/DbConfig.php"?>
    <!-- <script>
    //irudiaren "arrastratzea" desaktibatzeko
      $('img').on('dragstart', function(event) { event.preventDefault(); });
    </script> -->
  </head>
  <body>
    <div class="jumbotron bg-dark">
      <a href="../php/showFilms.php">
      <div class="row justify-content-center">
        <img src="../img/netflix-seeklogo.svg" alt="netflix-title">
      </div>
      </a>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-4">
          <div class="container">
            <ul class="navbar-nav h5">
              <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../php/register.php">Erregistratu</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="../php/showFilms.php">Katalogoa ikusi</a>
              </li>
              <?php if(isset($_SESSION['eposta'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="../php/addFilm.php">Pelikula sartu</a>
              </li>
              <?php } ?>
            </ul>
            <ul class="navbar-nav navbar-right">
              <li class="nav-item dropdown ml-auto">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-expanded="false"> Ongi etorri, <span class="font-weight-bold" id="userName"><?php
                      if(isset($_SESSION['eposta'])){
                        echo $_SESSION['eposta'];
                      }
                      else echo "Anonymous";
                       ?> </span></a>
                <div id="dropdownOptions" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <?php if(isset($_SESSION['eposta'])){?>
                    <a href="../php/showOwnFilms.php" class="dropdown-item">Nire galderak ikusi</a>
                    <div class="dropdown-divider"></div>
                    <a href="../php/logout.php" class="dropdown-item" id="logout">Saioa itxi</a>
                  <?php }
                  else{ ?>
                    <a href="../php/login.php" class="dropdown-item">Saioa hasi</a>
                    <a href="../php/register.php" class="dropdown-item">Erregistratu</a>
                  <?php } ?>
                </div>
              </li>
            </ul>
          </div>
        </nav>
    </div>
