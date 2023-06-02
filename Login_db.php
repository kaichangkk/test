<?php


session_start();
require_once 'db.php';


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($email)) {
        $_SESSION['error'] = 'ກະລຸນາປ້ອນອິເມວ';
        header('location: Login.php');
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'ຮູບແບບອິເມວບໍ່ຖືກຕ້ອງ';
        header('location: Login.php');
    } else if (empty($password)) {
        $_SESSION['error'] = 'ກະລຸນາປ້ອນລະຫັດຜ່ານ';
        header('location: Login.php');
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error'] = 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວລະຫວ່າງ 5-20 ຕົວ';
        header('location: Login.php');
    } else {

        try {
            $check_email = $con->prepare("SELECT email,password FROM menber WHERE email = :email");
            $check_email->bindParam(":email", $email);
            $check_email->execute();
            $row = $check_email->fetch(PDO::FETCH_ASSOC);

            if ($check_email->rowCount() > 0) {
                if ($email == $row['email']) {
                    if ($password == $row['password']){

                        $_SESSION['login'] = $row['id'];
                        header("location: index.php");
                        
                    } else {
                        $_SESSION['error'] = 'ລະຫັດຜ່ານຜີດ';
                        header("location: Login.php");
                    }
                } else {
                    $_SESSION['error'] = 'ອີເມວຜີດ';
                    header("location: Login.php");
                }
            } else {
                $_SESSION['error'] = 'ບໍ່ມີຂໍ້ມູນໃນລະບົບ';
                header("location: Login.php");
            }
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
    }
}
?>
