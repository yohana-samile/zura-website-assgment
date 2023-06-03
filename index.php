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
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/IMG_7429-scaled.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 470px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bei mpya za Mafuta – Aprili 2023</h3>
                        <p>Mamlaka ya Udhibiti wa Huduma za Maji na Nishati Zanzibar (ZURA) imetangaza bei mpya za mafuta kwa mwezi Aprili, 2023 kama ifuatavo:</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/360_F_14292226_VbvT8FS2ZDTegFc7rUAV0N9dSvzrqagC.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 470px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Uzinduzi wa Bohari ya Mangapwani</h3>
                        <p>Matukio katika picha, Uzinduzi wa bohari ya Mangapwani.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/NINTCHDBPICT000672326521.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 470px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>ZURA yatangaza bei mpya za mafuta.</h3>
                        <p>Mamlaka ya Udhibiti wa Huduma za Maji na Nishati Zanzibar (ZURA) imetangaza bei mpya za mafuta kwa mwezi Machi, 2023 kama ifuatavo:</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <?php if(isset($_GET['key'])){} ?>
        <!-- Featured Start -->
        <div id="price">
            <div class="container-fluid pt-5">
                <h1 class="text-center text-decoration-underline">Prices</h1>
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Petrolium - </h5>
                            <h5 class="font-weight-semi-bold m-0">Tsh2,880</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                            <h5 class="font-weight-semi-bold m-0">Diesel - </h5>
                            <h5 class="font-weight-semi-bold m-0">Tsh2,980 </h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0"> Kerosine - </h5>
                            <h5 class="font-weight-semi-bold m-0">Tsh2,921</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-plane text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0"> Jet A1 - </h5>
                            <h5 class="font-weight-semi-bold m-0">Tsh2,681</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->

        <!-- our services -->
        <div id="service">
            <div class="container col-md-12 pt-5  bg-light">
                <h1 class="text-center text-decoration-underline">Our Services</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <h1 class="card-title text-center"><i class="fa fa-cog text-primary"></i></h1>
                            <div class="card-body">
                                <h5 class="card-title">Regulatory Services</h5>
                                <p class="card-text">The Zanzibar Utilities Regulatory Authority (ZURA) is a multi-sectoral regulator responsible for technical and economic regulations of the Water and energy sector in Zanzibar. It was established under section 3 of the Zanzibar Utilities Regulatory Authority Act No. 7/2013 of the Laws of Zanzibar.</p>
                                <a href="http://www.zura.go.tz/regulatory-services/" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="height: 295px;">
                            <h1 class="card-title text-center"><i class="fa fa-dot-circle text-primary"></i></h1>
                            <div class="card-body">
                                <h5 class="card-title">Public Awareness</h5>
                                <p class="card-text">Zanzibar Utilities Regulatory Authority (ZURA) ensures that the public is informed and aware of the Authority's functions and responsibilities in the regulated sectors.</p>
                                <a href="https://www.zura.go.tz/" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of services -->

        <!-- about us -->
        <div id="about">
            <div class="container col-md-12 pt-5">
                <h1 class="text-center text-decoration-underline">About Us</h1>
                <h4>WHAT WE DO...</h4>
                <p>The functions of ZURA include among others, licensing, tariff review, monitoring performance and standards with regards to quality, safety, health and environment. ZURA is also responsible for promoting private sector participation, effective competition and economic efficiency in public utilities. ZURA also protects the interests of consumers including those who are low-income, rurally located or disadvantaged.</p>
                <h4>OUR DUTIES...</h4>
                <p>In carrying out its functions, ZURA shall strive to enhance the welfare of Zanzibar society by:</p>
                <ul>
                    <li>Establish standards for regulated goods and services; terms and conditions of supply of goods and services;</li>
                    <li>Ensure that all utility suppliers provide adequate service and have means to finance their activities;</li>
                    <li>The Authority may prepare codes of conduct, reporting requirements, scheme of service, staff regulations and any other actions which necessary to regulate utilities effectively;</li>
                    <li>Facilitate and encourage private sector participation, fair competition, and participation in investments in public utilities;</li>
                    <li>Ensure compliance by public utilities with the laws governing their activities;</li>
                    <li>Prepare and issue rules and directives to public utility sector;</li>
                    <li>Establish and implement adequate systems for monitoring the compliance by licensees with standards and applicable regulations, and making such information publicly available;</li>
                    <li>Establish an appropriate procedure for receiving, enquiring and resolving complaints by customers in relation to any utility services within time provided under the regulations of this Act;</li>
                    <li>Facilitate the resolution of complaints and disputes;</li>
                    <li>Disseminate information about matters of its functions;</li>
                    <li>Have due regard to the preservation and protection of the environment, the conservation of natural resources and health and safety of users;</li>
                    <li>Issue orders to regulated public utility.</li>
                </ul>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title text-center"><i class="fa fa-lightbulb"></i></h1>
                                <h5 class="card-title text-center">VISION</h5>
                                <p class="card-text">To be a world class regulatory authority and a point of reference in energy and water utilities regulation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title text-center"><i class="fa fa-dot-circle"></i></h1>
                                <h5 class="card-title text-center">MISSION</h5>
                                <p class="card-text">To be a world class regulatory authority and a point of reference in energy and water utilities regulation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title text-center"><i class="fa fa-expand"></i></h1>
                                <h5 class="card-title text-center">CORE VALUES</h5>
                                <ul>
                                    <li>Transparency & Accountability</li>
                                    <li>Integrity</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about us -->

        <!-- Footer Start -->
        <div id="contact">
            <div class="row pt-5 bg-light">
                <h1 class="text-center text-decoration-underline">Location And Contact</h1>
                <div class="col-md-6 float-left">
                    <div class="container float-left">
                        <h3>Zura Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6810333723665!2d39.19562021476906!3d-6.1734421955305665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd089dd004979%3A0x4b842ee9558352a7!2sZanzibar%20Utilities%20Regulatory%20Authority%20ZURA!5e0!3m2!1sen!2stz!4v1685782653809!5m2!1sen!2stz" width="600" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container float-right">
                        <form action="sendMessageAction.php" method="post">
                            <h4>Send your message / feedback / comment to Zura</h4>
                            <div class="mb-3">
                                <input type="text" name="customerFullName" placeholder="your names" class="form-control" id="customerFullName" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="customerEmail" placeholder="Email address" class="form-control" id="email" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="subject" placeholder="subject" class="form-control" id="subject">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" id="message" placeholder="Message" class="form-control" rows="10" required></textarea>
                            </div>
                            <button type="submit" name="sendComment" class="form-control bg-primary text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-7 mb-0 text-muted">© 2023 ZANZIBAR UTILITIES REGULATORY AUTHORITY | Developed by <a href="https://github.com/yohana-samile/">Samile Web Solution</a></p>

                <a href="index" class="col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="images/Zanzibar_Utility_Regulatory_Authority_Logo.png" alt="logo" style="width: 100px">                </a>

                <ul class="nav col-md-3 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">service</a></li>
                <li class="nav-item"><a href="#price" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
            </footer>
        </div>
        <!-- Footer End -->  
        <script src="asset/js/main.js"></script>

        <script src="asset/js/bootstrap.bundle.min.js"></script>
        <script src="asset/js/jquery-3.7.0.slim.min"></script>
        <script src="asset/js/jquery-3.7.0.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="asset/js/mainn.js"></script>
        <?php require_once('modal/appoitment.php'); ?>
    </body>
</html>