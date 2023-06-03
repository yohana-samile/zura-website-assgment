<?php 
    require_once('include/dbConnection.php'); 
    if(isset($_POST['sendComment'])):
       echo $customerFullName = $_POST['customerFullName'];
        $customerEmail = $_POST['customerEmail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $insertCustomerComment = $conn->query("INSERT INTO customerComment values (null, '$customerFullName', '$customerEmail', '$subject', '$message', current_timestamp()	)");
        if($insertCustomerComment):
            $_SESSION['success'] = "Your message has been sent. Thank you!";
            header('location:index.php?key=success');
        else:
            $_SESSION['error'] = "Something went wrong try again";
            header('location:index.php?key=error'); 
        endif;
    endif;
?>