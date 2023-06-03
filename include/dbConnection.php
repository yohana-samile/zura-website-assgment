<?php
    require_once('../include/messages.php');
    $conn = mysqli_connect("127.0.0.1", "root", "", "zura");
    if(!$conn):
        die(mysqli_error($conn)) . "Invalid Connection";
    endif;
?>