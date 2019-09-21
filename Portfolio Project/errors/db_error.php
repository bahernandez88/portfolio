<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<!DOCTYPE html>
<html>
<head>
    <title>Database Error</title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intitial-scale = 1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
     <header>
        <h1>Database Error</h1>
    </header>
    
    <nav class="mobileNav">
        <a href="#" id="subMenu"><img src="../Images/navicon.png" alt="navIcon"></a>
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
            <li><a href="../index.html">Home</a></li>
            <li><a href="../products.html">Products</a></li>
            <li><a href="../newsletter.html">Newsletter</a></li>
            <li><a href="../contact.html">Contact Us</a></li>
            <li><a href="../login.php">Admin Data</a></li>
            <li><a href="../listemployees.php">List Employees</a></li>
        </ul>
    </nav>
    
    <section class = "background">
        
    <main>
        
    <p>There was an error connecting to the database.</p>
    <p>Please contact the system administrator with the error message below.</p>
    <p>Error message: <?php echo $error_message; ?></p>

       
    </main>
        </section> 
</body>
</html>
