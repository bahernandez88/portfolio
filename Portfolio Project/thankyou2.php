<?php

//Get data from Oceanside contact page
$reason = filter_input(INPUT_POST, 'contactReason');
$firstName = filter_input(INPUT_POST, 'custFirstName');
$lastName = filter_input(INPUT_POST, 'custLastName');
$email= filter_input(INPUT_POST, 'custEmail');
$phone = filter_input(INPUT_POST, 'custPhone');
$comments = filter_input(INPUT_POST, 'comment');


//check user input, give error if it's wrong
//set up access to database: oceansidedb
if ($firstName == null || $lastName == null ||
        $email == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } else {
            $dsn = 'mysql:host=localhost;dbname=oceansidedb';
            $username = 'root';
            $password = 'Pa$$w0rd';

            try {
                $db = new PDO($dsn, $username, $password);

            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                /* include('database_error.php'); */
                echo "DB Error: " . $error_message; 
                exit();
            }
            
//set up insert statements
$query = 'INSERT INTO oceanside_contact'
        .   '(contactReason, visitorFirst, visitorLast, visitorEmail, visitorPhone, comment)'
        . 'values'
        .   '(:reason, :firstName, :lastName, :email,:phone, :comment)';
$statement = $db -> prepare($query);
$statement -> bindValue(':reason', $reason);
$statement -> bindValue(':firstName', $firstName);
$statement -> bindValue(':lastName', $lastName);
$statement -> bindValue(':email', $email);
$statement -> bindValue(':phone', $phone);
$statement -> bindValue(':comment', $comments);
$statement -> execute();
$statement ->closeCursor();
        }
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
        <article> 
            <h1>Thank you<h1>
                    <p><?php echo $firstName . " " . $lastName; ?>, for contacting me! I will get back to you shortly.</p>
            <section>
                <a href="newsletter.html">Back to Newsletter Page</a>
                <a href="index.html">Back to Home</a>
            </section>
        </article>
    </body>
</html>
