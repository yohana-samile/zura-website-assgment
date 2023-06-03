<?php require_once('../include/dbConnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zura</title>
        <link rel="stylesheet" href="../asset/css/style.css">
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="icon" href="../images/Zanzibar_Utility_Regulatory_Authority_Logo.png">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="../images/Zanzibar_Utility_Regulatory_Authority_Logo.png" alt="logo" style="width: 100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="userComment.php">User comments</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                       <a href="../logout.php" class="btn btn-light">Logout</a>
                    </span>
                </div>
            </div>
        </nav>
        <div class="container pt-5">
            <a href="" onclick="printAppoitment()" class="btn btn-primary float-right" style="float: right;">Print Today Appoitment</a>
            <p> customer appointment</p>
            <?php
                if(isset($_GET['key'])){}
                $queryForAppoitment = $conn->query("SELECT * FROM customerAppoitment order by timeSent desc");
                $getAppoitment = mysqli_num_rows($queryForAppoitment);
                while($getAppoitment= mysqli_fetch_array($queryForAppoitment)):
                    if($getAppoitment > 0): ?>
                        <div class="container text-white  bg-primary"><br>
                            <div class="row">
                                <div class="col-md-8 border-left-primary">
                                    <div class="bg-white text-dark">
                                        <p>Appointment Sender: <span class="badge bg-primary"><?php echo $getAppoitment['appoitmentSender']; ?></span></p>
                                        <p>Appointment date: -> <span class="badge bg-primary"> <?php echo $getAppoitment['appoitmentDate']; ?></p> </span>
                                        <p>Appointment Time: -> <span class="badge bg-primary"><?php echo $getAppoitment['appoitmentTime']; ?></p> </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <p>Time Sent: <span class="badge bg-white text-dark"><?php echo $getAppoitment['timeSent']; ?></span> </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                endwhile;

                // today appoitment
                $todayDate = date('Y-m-d');
                $queryForAppoitment = $conn->query("SELECT * FROM customerAppoitment where timeSent = '$todayDate' order by timeSent desc");
                if(mysqli_num_rows($queryForAppoitment) > 0): ?>
                    <div id="printAppoitment" hidden>
                        <?php while($getAppoitment= mysqli_fetch_array($queryForAppoitment)):  ?>
                            <div class="container text-white bg-primary"><br>
                                <div class="row">
                                    <div class="col-md-8 border-left-primary">
                                        <div class="bg-white text-dark">
                                            <p>Appointment Sender: <span class="badge bg-primary"><?php echo $getAppoitment['appoitmentSender']; ?></span></p>
                                            <p>Appointment date: -> <span class="badge bg-primary"> <?php echo $getAppoitment['appoitmentDate']; ?></p> </span>
                                            <p>Appointment Time: -> <span class="badge bg-primary"><?php echo $getAppoitment['appoitmentTime']; ?></p> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <p>Time Sent: <span class="badge bg-white text-dark"><?php echo $getAppoitment['timeSent']; ?></span> </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
        </div>
    <body>
        <script>
            function printAppoitment(){
                var printapp = window.open('', '_blank', 'height=700 width=800');
                printapp.document.write(document.getElementById("printAppoitment").innerHTML);
                printapp.print();
                printapp.close();
            }
        </script> 
    </html>