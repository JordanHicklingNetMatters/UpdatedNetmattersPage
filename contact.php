<?php 
    include_once 'inc/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us | Netmatters</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div id="main">
            <?php include("inc/header.php"); ?>
            <div class="text-nav-container">
                <div class="container">
                    <h5 class="text-nav"><a href="index.php"> Home</a> / Our Offices</h5>
                </div>
            </div>
            <div class="container">
                <div class="office-header-container">
                    <h3 id="office-header">Our Offices</h3>
                </div>
            </div>
            <div class="container">
                <div class="location-flex">
                    <div class="location-container">
                        <img class="location-img" src="img/cambridge-office.jpg">
                        <div class="container">
                            <h3 class="location-header"><a href="#">Cambridge Office</a></h3>
                            <p class="location-details">
                            Unit 1.31, <br>
                            St John's Innovation Centre, <br>
                            Cowley Road, Milton, <br>
                            Cambridge, <br>
                            CB4 0WS <br>
                            </p>
                            <h1 class="location-phone-num"><a href="tel:01223 37 57 72">01223 37 57 72</a></h1>
                            <div class="view-more">
                                <a href="#"><button class="view-more-button-tag" type="button">View More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="location-container">
                        <div class="img-container">
                            <img class="location-img" src="img/wymondham-office.jpg">
                        </div>
                        <div class="container">
                            <h3 class="location-header"><a href="#">Wymondham Office</a></h3>
                            <p class="location-details">
                            Unit 15, <br>
                            Penfold Drive, <br>
                            Gateway 11 Business Park, <br>
                            Wymondham, Norfolk, <br>
                            NR18 0WZ <br>
                            </p>
                            <h1 class="location-phone-num"><a href="tel:01603 70 40 20">01603 70 40 20</a></h1>
                            <div class="view-more">
                                <a href="#"><button class="view-more-button-tag" type="button">View More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="location-container">
                        <div class="img-container">
                            <img class="location-img" src="img/yarmouth-office.jpg">
                        </div>
                        <div class="container">
                            <h3 class="location-header"><a href="#">Great Yarmouth Office</a></h3>
                            <p class="location-details">
                            Suite F23, <br>
                            Beacon Innovation Centre, <br>
                            Beacon Park, Gorleston, <br>
                            Great Yarmouth, Norfolk, <br>
                            NR31 7RA <br>
                            </p>
                            <h1 class="location-phone-num"><a href="tel:01493 60 32 04">01493 60 32 04</a></h1>
                            <div class="view-more">
                                <a href="#"><button class="view-more-button-tag" type="button">View More</button></a>
                                <!-- <a href="#" class="view-more-btn">View More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="text-format"> 
                    <p><strong>Email us on:</strong></p>
                    <p class="email-text"><a href="mailto:sales@netmatters.com?subject=subject text">sales@netmatters.com</a></p>
                    <p><strong>Business hours:</strong></p>
                    <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                    <p class="hidden-information-text"><a href="#"><strong>Out of Hours IT support <i class="fa-sharp fa-solid fa-chevron-down"></i></strong></a></p> 
                    <div class="dropdown-information">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 Sunday 10:00 - 18:00</p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                    </div>
                </div> 
                <div class="form">
                    <?php
                        include 'inc/contactForm.php';
                        // var_dump($_POST);
                    ?>
                    <form id="contact-form" action="contact.php" method="POST">
                        <div class="flex-form">     
                            <div class="form-group">
                                <label for="name">Your Name <span class="required">*</span></label>
                                <input class= "form-control" name="name" type="text" id="name">
                                <p id="name-warning"><span class="required">*</span> You need to put in a name<p>
                            </div>
                            <div class="form-group">
                                <label for="company-name">Company Name</label>
                                <input class= "form-control" name="company-name" type="text" id="company-name">
                            </div>
                        </div>
                        <div class="flex-form">  
                            <div class="form-group">
                                <label for="email">Your Email <span class="required">*</span></label>
                                <input class= "form-control" name="email" type="email" id="email">
                                <p id="email-warning"><span class="required">*</span> You need to put in an email<p>
                                <p id="regex-warning"><span class="required">*</span> You need to put in a valid email<p>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Your Telephone Number <span class="required">*</span></label>
                                <input class= "form-control" name="telephone" type="text" id="telephone">
                                <p id="telephone-warning"><span class="required">*</span> You need to put in a telephone<p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input class= "form-control" name="subject" type="text" id="subject">
                            <p id="subject-warning"><span class="required">*</span> You need to tell us the subject<p>
                        </div>
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea class="form-control" name="message" id="message"></textarea>
                            <p id="message-warning"><span class="required">*</span> You must include a message!<p>
                            <input class="tickbox" type="checkbox" id="accept" value="">
                            <label class="accept-information" for="accept"> Please tick this box if you wish to receive
                                marketing information from us. Please see our <a href=#>Privacy Policy</a> for more information
                                on how we keep your data safe.
                            </label>
                        <div class="button-field-flex">
                            <div class="form-group">
                                <button class="view-more-button-tag" type="submit" name="submit">SEND ENQURY</button>
                            </div>
                            <p id="field-text"><span class="required">*</span> Fields Required</p>
                        </div>
                    </form>
                </div>
            </div>

            <?php include("inc/newsletter.php"); ?>
            <?php include("inc/footer.php"); ?>

            <div id="sticky">
                <?php include("inc/header.php"); ?>
            </div>

        </div>

        <?php include("inc/sidebar.php");?>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/fc2f3a0d11.js" crossorigin="anonymous"></script>
        <script src="JS/main.js"></script>
    </body>
</html>






