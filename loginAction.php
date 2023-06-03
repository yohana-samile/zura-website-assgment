<?php
    require_once('include/dbConnection.php');
    if(isset($_POST['login'])):
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        if(empty($username) || empty($password)):
            $_SESSION['error'] = "All Field Are Mandatory";
            header('location:login.php?key=error');
        else:
            $getAdminRecord = $conn->query("SELECT * FROM admin WHERE username = '$username' and password = '$password' ");
            if(mysqli_num_rows($getAdminRecord) > 0):
                $_SESSION['adminData'] = mysqli_fetch_assoc($getAdminRecord);
                header('location:admin/index.php');
            else:
                $_SESSION['error'] = "Wrong username or password, try again with valid creditials";
                header('location:login.php?key=error');
            endif;
        endif;
    endif;
?>