<!-- <?php
session_start();
require_once 'db.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ສ້າງຂໍ້ມູນລູກຄ້າ</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- <style>
    input[type="text"] {
      display: block;
      padding: 5px;
      width: 90%;
      border: 2px solid#A8A8A8;
      background: none;
      color: #BEBEBE;
    }

    input[type="text"]:focus,
    input[type="text"]:hover {
      border: 2px solid #0093E0;
      outline: none;
    }

    input[type="password"]{
      display: block;
      padding: 5px;
      width: 90%;
      border: 2px solid#A8A8A8;
      background: none;
      color: #BEBEBE;
    }

    input[type="password"]:focus, input[type="password"]:hover{
      border: 2px solid #0093E0;
      outline: none;
    }
  </style> -->

</head>


<body>
  <div class="container">
    <h2>ແບບຟອມສະຫມັກ<h2>
      <form action="" method="POST">
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

            <div class="form-group">
                <input type="text" name="fName" placeholder="firtname" class="form-control">
                <input type="text" name="lName" placeholder="lastname" class="form-control">
              
            </div>
            
            <div class="form-wrapper">
              <div class="col-sm-10">
                <input type="text" name="Address" id="" class="form-control" placeholder="Address">
              </div>
            </div>
            <div class="form-wrapper">
              <div class="col-sm-10">
                <input type="text" name="tell" id="" class="form-control" placeholder="Tell">
              </div>
            </div>
            <div class="form-wrapper">
              <div class="col-sm-10">
                <input type="text" name="email" id="" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-wrapper">
              <div class="col-sm-10">
                <input type="text" name="age" id="" class="form-control" placeholder="Age">
              </div>
            </div>
            <div class="form-wrapper">
            <div class="col-sm-10">
                <select name="gender" id="" class="form-control">
                  <option value="" disabled selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>

                </select>
            </div>
            </div>
            <div class="form-wrapper">
              <div class="col-sm-10">
                <input type="password" name="password"  class="form-control" placeholder="Password">
              </div>
                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1" style="color: #fff;">Check me out</label>
                </div> -->
            </div>
              <input type="submit" value="ບັນທືກຂໍ້ມູນ" class="btn btn-success" name="register">
              <input type="reset" value="ລົບຂໍ້ມູນ" class="btn btn-danger">
              <a href="Login.php" style="color: #fff;">ກັບ</a>

      </form>   
  </div>
</body>
</html> -->