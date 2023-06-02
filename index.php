<?php 

    session_start();
    require_once 'db.php';
    // if (!isset($_SESSION['login'])){
    //   $_SESSION['error'] = 'ກະລຸນາເຂົ້າສູ່ລະບົບ';
    //   header(('location: Login.php'));
    // }
     if (isset($_SESSION['login'])) {
      $id = $_SESSION['login'];
      $stmt = $con->query("SELECT * FROM menber WHERE id = $id");
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
  }

    if (isset($_REQUEST['delete_id'])) {
      $id = $_REQUEST['delete_id'];

      $select_stmt = $con->prepare("SELECT * FROM menber WHERE id = :id");
      $select_stmt->bindParam(':id', $id);
      $select_stmt->execute();
      $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

      // Delete an original record from con$con
      $delete_stmt = $con->prepare('DELETE FROM menber WHERE id = :id');
      $delete_stmt->bindParam(':id', $id);
      $delete_stmt->execute();
      header('Location:index.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <a href="insert_Add.php" class="btn btn-success mb-4">Add</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">FirtName</th>
          <th scope="col">LastName</th>
          <th scope="col">Address</th>
          <th scope="col">Age</th>
          <th scope="col">Tell</th>
        </tr>
      </thead>
      <tbody>
           
        <?php

        $no=1;
        $stmt = $con->prepare("SELECT * FROM menber ");
        $stmt->execute();
        while ($row = $stmt->FETCH(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $row['FName']; ?></td>
          <td><?php echo $row['LName']; ?></td>
          <td><?php echo $row['Address']; ?></td>
          <td><?php echo $row['Age']; ?></td>
          <td><?php echo $row['Tell']; ?></td>
          <td><a href="update_a.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="?delete_id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php $no++; }
      ?>
      </tbody>
    </table>
        <a href="Logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>