<?php

//Get data from Newsletter page
//$firstName = filter_input(INPUT_POST, 'newsFirstName');
//$lastName = filter_input(INPUT_POST, 'newsLastName');
//$email= filter_input(INPUT_POST, 'newsEmail');
//$heard_from = filter_input(INPUT_POST, 'heardFrom');


//check user input, give error if it's wrong
//set up access to database: oceansidedb
//if ($firstName == null || $lastName == null ||
//        $email == null) {
//        $error = "Invalid input data. Check all fields and try again.";
//        /* include('error.php'); */
//        echo "Form Data Error: " . $error; 
//        exit();
//        } else {
//            $dsn = 'mysql:host=localhost;dbname=oceansidedb';
//            $username = 'root';
//            $password = 'Pa$$w0rd';
//
//            try {
//                $db = new PDO($dsn, $username, $password);
//
//            } catch (PDOException $e) {
//                $error_message = $e->getMessage();
//                /* include('database_error.php'); */
//                echo "DB Error: " . $error_message; 
//                exit();
//            }
//            
////set up insert statements
//$query = 'INSERT INTO newsletter'
//        .   '(firstName, lastName, emailAddress, heardFrom)'
//        . 'values'
//        .   '(:firstName, :lastName, :email, :heardFrom)';
//$statement = $db -> prepare($query);
//$statement -> bindValue(':firstName', $firstName);
//$statement -> bindValue(':lastName', $lastName);
//$statement -> bindValue(':email', $email);
//$statement -> bindValue(':heardFrom', $heard_from);
//$statement -> execute();
//$statement ->closeCursor();
//        }
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Thank You!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    
    <body>
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
