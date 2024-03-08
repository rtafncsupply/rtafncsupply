<?php
session_start();
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบแจ้งความต้องการครุภัณฑ์</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/css/style.css">
    <!-- Main Google Font css -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <form method="post" action="login_db_nisit.php">

        <div class="main">
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">


                        <div class="signin-form">
                            <center>
                                <h2 class="form-title">ลงชื่อเข้าใช้นักศึกษา</h2>
                            </center>

                            <div class="form-group">
                                <label for="your_name"></label>
                                <input type="text" name="your_name" id="your_name" placeholder="รหัสนิสิต" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="รหัสผ่าน" />
                            </div>

                            <div class="form-group form-button">
                                <center><input type="submit" name="signin" id="signin" class="form-submit1" value="เข้าสู่ระบบ" /></center>
                            </div>



                        </div>
                    </div>
                </div>
            </section>

        </div>
    </form>

</body>

</html>