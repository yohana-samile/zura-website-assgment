<?php require_once('include/messages.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zura</title>
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="icon" href="images/Zanzibar_Utility_Regulatory_Authority_Logo.png">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary text-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/Zanzibar_Utility_Regulatory_Authority_Logo.png" alt="logo" style="width: 100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#service">our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#price">Pricing</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                       <a href="" data-bs-toggle="modal" data-bs-target="#makeAppoitment" class="btn btn-light">Make Appoitment</a>
                    </span>
                </div>
            </div>
        </nav>
        <div class="container col-md-5">
            <form action="loginAction.php" method="post">
                <h3>Admin login page</h3>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary">login</button>
            </form>
        </div>