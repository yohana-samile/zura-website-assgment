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
        <div class="container border border-left-primary">
    <p>Customer Comment/ Feedback/ Questions</p>
    <?php
        if(isset($_GET['key'])){}
        $queryForMessage = $conn->query("SELECT * FROM customercomment ORDER BY `customercomment`.`timeSent` desc");
        $getMessage = mysqli_num_rows($queryForMessage);
        while($getMessage = mysqli_fetch_array($queryForMessage)):
            if($getMessage > 0): ?>
                <div class="border border-left-primary"  style="background-color: #37517e;">
                    <div class="container text-white"><br>
                        <div class="row bg-white d-flex justify-content-center">
                            <div class="col-md-8 border-left-primary">
                                <div class="bg-white text-dark">
                                    <p>Comment Sender: <span class="badge bg-primary"><?php echo $getMessage['customerFullName']; ?></span> </p>
                                    <p>Message Content: -> <?php echo $getMessage['message']; ?></p>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark">Time Sent: <span class="badge bg-primary text-white"><?php echo $getMessage['timeSent']; ?></span> </p>
                                <div class="row ">
                                    <div class="col-md-6 float-right">
                                      <a href="" data-bs-toggle="modal" class="btn btn-primary float-right" style="float: right;">Replay</a>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div><br>
                <div class="modal fade" id="replayComment<?php echo $getMessage['commentId']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="replayComment<?php echo $getMessage['commentId']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"><a href="index.php">Samile Web Solution/ Admin Registration</a></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../controller/sendCommentAction.php" method="post">
                                    <div class="mb-3">
                                        <input type="text" name="fullName" value="<?php echo $getMessage['commentId']; ?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="message" class="form-control" id="" disabled cols="5" rows="10"><?php echo $getMessage['message']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="messageFeedBack" id="messageFeedBack" cols="30" class="form-control" placeholder="replay here" rows="10"></textarea>                 
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="replayComment" class="btn btn-primary">Replay Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endif;
        endwhile;
    ?>
</div>