<?php 
    session_start();
    include('config.php');
    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        if (count($errors) == 0) {
            $password = $password;
            $query = "SELECT * FROM table_admin WHERE user_admin = '$username' AND password = '$password' ";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                header("location: admin/");
            } else {
             echo "<script>";
             echo "alert(\" username หรือ password ไม่ถูกต้อง\");"; 
             echo "window.history.back()";
             echo "</script>";
            }
        } else { }
    }
?>