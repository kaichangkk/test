<?php
session_start();
require_once 'db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>ສ້າງຂໍ້ມູນລູກຄ້າ</title>
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    input[type=password],
    select {
      width: 100%;
      padding: 10px;
      border: 2px solid #ccc;
      resize: vertical;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid black;
      background-color: #f2f2f2;
      border-radius: 10px;
    }

    h1 {
      text-align: center;
    }

    label {
      padding: 0 5px 10px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border-radius: 15px;
    }

    input[type=reset] {
      background-color: red;
      color: white;
      padding: 12px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      border-radius: 15px;
    }


    input[type=submit]:hover {
      background-color: #45a049;
    }

    input[type=reset]:hover {
      background-color: rgb(150, 45, 45);
    }

    .container {
      width: 100%;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 50px 50px 50px 50px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 1px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 1px;
    }


    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="text"]:hover,
    input[type="password"]:hover {
      border: 2px solid rgb(29, 28, 38);
      outline: none;
    }
  </style>
</head>

<body>



  <div class="container">
    <h1 class="text-center">ແບບຟອມສະຫມັກ<h1>
        <form action="insertData.php" method="POST">
          <?php if (isset($_SESSION['error'])) {    ?>
            <div class="alert alert-danger" role="alert">
              <?php
              echo $_SESSION['error'];
              unset($_SESSION['error']);
              ?>
            </div>
          <?php  }   ?>


          <?php if (isset($_SESSION['success'])) {    ?>

            <div class="alert alert-success" role="alert">
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
            </div>
          <?php  }   ?>
          <?php if (isset($_SESSION['warning'])) {    ?>
            <div class="alert alert-warning" role="alert">
              <?php
              echo $_SESSION['warning'];
              unset($_SESSION['warning']);
              ?>
            </div>
          <?php   }    ?>
          <div class="row">
            <div class="col-25">
              <label for="fname">Full Name</label>
            </div>
            <div class="col-75">
              <input type="text" name="fName" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <input type="text" name="lName" placeholder="Your last name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="address">Address</label>
            </div>
            <div class="col-75">
              <input type="text" name="Address" placeholder="Your Address..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="tell">Tell</label>
            </div>
            <div class="col-75">
              <input type="text" name="tell" placeholder="Your Tell..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" name="email" placeholder="Your Email..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="age">Age</label>
            </div>
            <div class="col-75">
              <input type="text" name="age" placeholder="Your age..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="password">Password</label>
            </div>
            <div class="col-75">
              <input type="Password" name="password" placeholder="Your Password..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="gender">Gender</label>
            </div>
            <div class="col-75">
              <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <input type="submit" value="ບັນທືກຂໍ້ມູນ" class="btn btn-success" name="register">
          <input type="reset" value="ລົບຂໍ້ມູນ" class="btn btn-danger">
          <a href="Login.php">ກັບ</a>
        </form>
  </div>
</body>

</html>