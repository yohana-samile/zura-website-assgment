<?php 
    require_once('include/dbConnection.php'); 
    if(isset($_POST['makeAppoitment'])):
        $appoitmentSender = $_POST['appoitmentSender'];
        $email = $_POST['email'];
        $appoitmentDate = $_POST['appoitmentDate'];
        $appoitmentTime = $_POST['appoitmentTime'];
        $timeSent = $_POST['timeSent'];
        $insertCustomerAppoitment = $conn->query("INSERT INTO customerAppoitment values (null, '$appoitmentSender', '$email', '$appoitmentDate', '$appoitmentTime', '$timeSent')");
        if($insertCustomerAppoitment):
            $_SESSION['success'] = "Appoitment sent. Thank you!";
            header('location:index.php?key=success');
        else:
            $_SESSION['error'] = "Something went wrong try again";
            header('location:index.php?key=error'); 
        endif;
    endif;
?>