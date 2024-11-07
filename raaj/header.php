<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Raaj Hospital</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Welcome to <span>Raj</span> Hospital</p>
                            <p>Opening Hours : Monday to Saturday - 8am to 10pm Contact : <span>+91-9848047481</span></p>
							 <a href="#" class="btn medilife-appoint-btn ml-30" data-toggle="modal" data-target="#myModal" >For <span>emergencies</span> Click here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="background-color:#4cc0cb !important;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/raj logo1.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                       <?php if($k=='1'){?>  <li class="nav-item active">
                                            <a class="nav-link" href="home.php"  >Home <span class="sr-only">(current)</span></a>
                                        </li>
									   <?php } else {?> 
										<li class="nav-item ">
                                            <a class="nav-link" href="home.php">Home </a>
									   </li><?php }?>
                                    <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.php">Home</a>
                                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                                <a class="dropdown-item" href="services.html">Services</a>
                                                <a class="dropdown-item" href="blog.html">News</a>
                                                <a class="dropdown-item" href="single-blog.html">News Details</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="elements.html">Elements</a>
                                                <a class="dropdown-item" href="index-icons.html">All Icons</a>
                                            </div>
                                        </li>-->
										 
                                        <?php if($k=='2'){?>  
										<li class="nav-item dropdown active">
										 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                               <!-- <a class="dropdown-item" href="about.php">Overview</a>-->
                                                <a class="dropdown-item" href="rajesh_soni.php">Dr. RAJESH SONI</a>
                                                <a class="dropdown-item" href="rajshri_soni.php">Dr. RAJSHRI SONI</a>
                                               
                                            </div>
                                        </li><?php } else {?>
										
										<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                               <!-- <a class="dropdown-item" href="about.php">Overview</a>-->
                                                <a class="dropdown-item" href="rajesh_soni.php">Dr. RAJESH SONI</a>
                                                <a class="dropdown-item" href="rajshri_soni.php">Dr. RAJSHRI SONI</a>
                                            </div>
                                        </li><?php }?>
                                     

									   <?php if($k=='3'){?>
									   
									   	<li class="nav-item dropdown active">
										 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Specialists</a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="ortho.php">Ortho</a>
												<a class="dropdown-item" href="joint.php">Joint Replacement</a>
												  <a class="dropdown-item" href="spine.php">Spine Surgery</a>
												  <a class="dropdown-item" href="plastic.php">Plastic Surgery</a>
												   <a class="dropdown-item" href="general.php">General Surgery</a>
												   <a class="dropdown-item" href="lapro.php">Laparoscopic Surgery</a>
												    <a class="dropdown-item" href="ent.php">ENT</a>
													 <a class="dropdown-item" href="gen_med.php">General Medicine</a>
                                                <a class="dropdown-item" href="ayurvedic.php">Ayurvedic</a>
                                               
                                               
                                            </div>
                                        </li><?php } else {?>
										
										<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Specialists</a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                               <a class="dropdown-item" href="ortho.php">Ortho</a>
											   <a class="dropdown-item" href="joint.php">Joint Replacement</a>
											     <a class="dropdown-item" href="spine.php">Spine Surgery</a>
												  <a class="dropdown-item" href="plastic.php">Plastic Surgery</a>
												   <a class="dropdown-item" href="general.php">General Surgery</a>
												     <a class="dropdown-item" href="lapro.php">Laparoscopic Surgery</a>
													  <a class="dropdown-item" href="ent.php">ENT</a>
													  <a class="dropdown-item" href="gen_med.php">General Medicine</a>
                                                <a class="dropdown-item" href="ayurvedic.php">Ayurvedic</a>
                                            </div>
                                        </li><?php }?>
									   
									   
									   <?php if($k=='6'){?><li class="nav-item active">
                                            <a class="nav-link" href="gallery.php">Gallery</a>
                                        </li>
									   <?php } else{?>
										<li class="nav-item">	
                                            <a class="nav-link" href="gallery.php">Gallery</a>
									   </li><?php }?>
									  
									   
									     <?php if($k=='5'){?><li class="nav-item active">
                                            <a class="nav-link" href="calender.php">Calender</a>
                                        </li>
									   <?php } else{?>
										<li class="nav-item">
                                            <a class="nav-link" href="calender.php">Calender</a>
									   </li><?php }?>
									   
									    <?php if($k=='7'){?><li class="nav-item active">
                                            <a class="nav-link" href="carriers.php">Carriers</a>
                                        </li>
									   <?php } else{?>
										<li class="nav-item">
                                            <a class="nav-link" href="carriers.php">Carriers</a>
									   </li><?php }?>
									   
                                       <!-- <li class="nav-item">
                                            <a class="nav-link" href="blog.html">News</a>
                                        </li>-->
                                      <?php if($k=='4'){?>  <li class="nav-item active">
                                            <a class="nav-link" href="contact.php">Contact</a>
									  </li><?php } else {?>
										<li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact</a>
									  </li><?php }?>
									  <li class="nav-item">
                                            <a class="nav-link" href="contact.php" target="new">Login</a>
									  </li>
									  
                                    </ul>
                                    <!-- Appointment Button -->
                                   
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
