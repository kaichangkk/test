<?php session_start();  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wodth, initial-scale=1">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Form</title>
    <style>
        input[type="text"],
        input[type="password"] {
            display: block;
            padding: 5px;
            margin-bottom: 24px;
            width: 100%;
            border: 2px solid#A8A8A8;
            background: none;
            color: #fff;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="text"]:hover,
        input[type="password"]:hover {
            border: 2px solid #0093E0;
            outline: none;
        }

        input[type="checkbox"] {
            margin-bottom: 20px;
        }
    </style>

</head>

<body style="background-color: #878787;">

    <div class="d-flex vh-100">
        <div style="background-color: #2c2c2c; width: 400px; height:400px; border-radius: 24px; padding: 45px 16px 45px 16px;" class="mx-auto align-self-center">
            <h1 style="color: #fff; font-size: 30px; margin: buttom 24px;">ລະບົບຈັດການຫ້ອງແຖວ</h1>
            <form action="Login_db.php" method="POST">
                <?php if (isset($_SESSION['error'])) {    ?>

                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php   }    ?>
                <?php if (isset($_SESSION['success'])) {    ?>

                    <div class="alert alert-success" role="alert">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php   }    ?>
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="password">
                <div class="checkbox-container">
                    <input type="checkbox" class="checkbox" id="checkbox">
                    <label class="form-check-label" for="exampleCheck1" style="color: #fff;">ກົດເພື່ອສະແດງລະຫັດຜ່ານ</label>
                </div>
                <div class="botton-area">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <button class="btn btn-secondary">Sing Up</button>
                </div>
                <p style="color: #fff;">ຍັງບໍ່ເປັນສະມາຊິກແມ່ນບໍ? <a href="insertUser_a.php">ສະຫມັກສະມາຊີກ</a></p>



            </form>
        </div>
    </div>
</body>

</html>