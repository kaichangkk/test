<?php 
    session_start();
    require_once('db.php');


  

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $Address = $_POST['Address'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $tell = $_POST['tell'];
        $email = $_POST['email'];
    
        
        if (empty($fName) or empty($lName) or empty($Address) or empty($age) or empty($gender) or empty($tell)) {
            header("location: update_a.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'ກະລຸນາປ້ອນອິເມວ';
            header("location: update_a.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'ຮູບແບບອິເມວບໍ່ຖືກຕ້ອງ';
            header("location: update_a.php");
        }  else {
            try {
                if(!isset($_SESSION['error'])) {
                $sql="UPDATE menber SET FName = :fName_up, LName = :lName_up, Address = :Address_up, Age = :age_up, Gender = :gender_up, Tell = :tell_up, email = :email_up WHERE id = $id" ;
                    $stmt = $con->prepare($sql);
                    $stmt->execute(
                        array(
                            'fName_up' => $fName,
                            'lName_up' => $lName,
                            'Address_up' => $Address,
                            'age_up' => $age,
                            'gender_up' => $gender,
                            'tell_up' => $tell,
                            'email_up' => $email
                           
    
    
                        )
                    );


               
                    
                    $cont = $stmt->rowCount();

                    if ($cont > 0) {
                        $_SESSION['success'] = "ແກ້ໄຂຂໍ້ມູນສຳເລັດ";
                        header("location: index.php");
                    }
                }
            } catch (PDOException $e) {
                $_SESSION['warning'] = "failed ";
            }
        }
    }
    ?>
