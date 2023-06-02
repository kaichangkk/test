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
    <title>ແກ້ໄຂຂໍ້ມູນລູກຄ້າ</title>
    <style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=password], select {
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
<h1 class="text-center">ແກ້ໄຂຂໍ້ມູນລູກຄ້າ<h1>
<form action="update_db.php" method="POST">
<?php if (isset($_SESSION['error'])) {    ?>
          <div class="alert alert-danger" role="alert">
            <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
            <?php  }   ?>


            <?php if (isset($_SESSION['success update'])) {    ?>

            <div class="alert alert-success update" role="alert">
                <?php
                echo $_SESSION['success update'];
                unset($_SESSION['success update']);
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

              <?php

            $id  = $_GET['update_id'];
            $stmt = $con->prepare("SELECT * FROM menber WHERE id=$id");
            $stmt->execute();
            $row = $stmt->FETCH(PDO::FETCH_ASSOC);
            ?>

  <div class="row">
    <div class="col-25">
    <div class="col-sm-10">
            <input type="hidden" name="id"  class="form-control" value="<?php echo  $row['id']; ?>">
            </div>
      <label for="fname">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="fName" placeholder="Your name.." value="<?php echo $row['FName']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="lName" placeholder="Your last name.." value="<?php echo $row['LName']; ?>">
    </div>
    </div>
    <div class="row">
  <div class="col-25">
      <label for="address">Address</label>
    </div>
    <div class="col-75">
      <input type="text" name="Address" placeholder="Your Address.." value="<?php echo $row['Address']; ?>">
    </div>
    </div>
    <div class="row">
  <div class="col-25">
      <label for="tell">Tell</label>
    </div>
    <div class="col-75">
      <input type="text" name="tell" placeholder="Your Tell.." value="<?php echo $row['Tell']; ?>">
    </div>
    </div>
    <div class="row">
  <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Your Email.." value="<?php echo $row['email']; ?>">
    </div>
    </div>
    <div class="row">
    <div class="col-25">
      <label for="age">Age</label>
    </div>
    <div class="col-75">
      <input type="text" name="age" placeholder="Your age.." value="<?php echo $row['Age']; ?>">
    </div>
    </div>
  
  <div class="row">
    <div class="col-25">
      <label for="gender">Gender</label>
    </div>
    <div class="col-75">
      <select name="gender"  value="<?php echo $row['Gender']; ?>">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
      </select>
    </div>
  </div>
              <input type="submit" value="ບັນທືກຂໍ້ມູນ" class="btn btn-success" name="update">
              <input type="reset" value="ລົບຂໍ້ມູນ" class="btn btn-danger">
              <a href="index.php">ກັບ</a>
  </form>
</div>  
</body>
</html>