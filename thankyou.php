<?php
    
    $visitor_name = filter_input(INPUT_POST, 'name');
    $visitor_email = filter_input(INPUT_POST, 'email');
    $visitor_msg = filter_input(INPUT_POST, 'message');
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
    
    // Validate inputs
    if ($visitor_name == null || $visitor_email == null ||
        $visitor_msg == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } else {
            $dsn = 'mysql:host=localhost;dbname=portfoliodb';
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

            // Add the product to the database  
//            $query = 'INSERT INTO pt_contact(
//                                visitorName,visitorEmail, comment)
//                      VALUES
//                         (:visitor_name, :visitor_email, :visitor_msg)';
            $query = 'insert into pt_contact(
                            visitorName,visitorEmail, comment)
                    VALUES
                            (:visitor_name, :visitor_email, :visitor_msg)';
            $statement = $db->prepare($query);
            $statement->bindValue(':visitor_name', $visitor_name);
            $statement->bindValue(':visitor_email', $visitor_email);
            $statement->bindValue(':visitor_msg', $visitor_msg);
            $statement->execute();
            $statement->closeCursor();
            /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg; */

}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Thank You!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    <body>
        <h2>Thank you, <?php echo $visitor_name; ?>, for contacting me! I will get back to you shortly.</h2>
        <a href="contact.html">Back to Contact Page</a>
        <a href="index.html">Back to Home</a>
        
    </body>
</html>

