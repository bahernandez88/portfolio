<?php

//*****************************************************************************
//  Date            Name                                Description
//  ---------------------------------------------------------------------------
//  9/13/2019   Brian A. Hernandez  thankyou page displays after successful
//                                  completion of either newsletter or comment
//
//
//
//
//*****************************************************************************
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Thank You!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href ='CSS/style.css'
        <!--<link rel="stylesheet" href="../CSS/style.css"/>-->
    </head>
    
    <body>
         <header>
        <h1>Success!</h1>
    </header>
    <nav class="mobileNav">
        <a href="#" id="subMenu"><img src="./Images/navicon.png" alt="navIcon"></a>
        <ul id="subTitle">
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="newsletter.html">Newsletter</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href = "login.php">Admin Data</a></li>
            <li><a href="listemployees.php">List Employees</a></li>
        </ul>

    </nav>

    <nav id="horizonNav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="newsletter.html">Newsletter</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href = "login.php">Admin Data</a></li>
            <li><a href="listemployees.php">List Employees</a></li>
        </ul>
    </nav>
        <article> 
            <h1>Submitted!</h1>
            <section>
                    <p>Thank you for contacting me! I will get back to you shortly.</p>
            
                <a href="newsletter.html">Back to Newsletter Page</a>
                <a href="index.html">Back to Home</a>
            </section>
        </article>
    </body>
</html>
