<?php


session_start();
require_once 'db.php';



if (isset($_POST['register_db'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $Address = $_POST['Address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $tell = $_POST['tell'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    




    if (empty($fName) or empty($lName) or empty($Address) or empty($tell) or empty($password)) {
        $_SESSION['error'] = 'ກະລຸນາປ້ອນຂໍ້ມູນ';
        header("location: insert_Add.php");
    } else if (empty($email)) {
        $_SESSION['error'] = 'ກະລຸນາປ້ອນອິເມວ';
        header("location: insert_Add.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'ຮູບແບບອິເມວບໍ່ຖືກຕ້ອງ';
        header("location: insert_Add.php");
    } else {

        try {
            $stmt = $con->prepare("SELECT email FROM menber WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['email'] == $email) {
                $_SESSION['warning'] = "ມີອິເມວນີ້ຢູ່ແລ້ວ";
                header("location: insert_Add.php");
                
            } else if (!isset($_SESSION['warning'])){
                $sql = "INSERT INTO menber(FName,LName,Address,Age,Gender,Tell,email,password)
                     VALUES(:fName,:lName,:Address,:age,:gender,:tell,:email,:password)";
                $stmt = $con->prepare($sql);
                $stmt->execute(
                    array(
                        'fName' => $fName,
                        'lName' => $lName,
                        'Address' => $Address,
                        'age' => $age,
                        'gender' => $gender,
                        'tell' => $tell,
                        'email' => $email,
                        'password' => $password
                    

                    )
                );



                $cont = $stmt->rowCount();

                if ($cont > 0) {
                    $_SESSION['success'] = "ລົງທະບຽນສຳເລັດ";
                    header("location: index.php");

                }
                    
            }
        } catch (PDOException $e) {
            $_SESSION['warning'] = "failed ";
        }
    }
}
?>
                