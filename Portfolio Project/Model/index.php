<?php
//*****************************************************************************
//  Date            Name                                Description
//  ---------------------------------------------------------------------------
//  9/13/2019   Brian A. Hernandez  added if statements to handle 'action 
//                                  passed in from admin.php or contact.html
//
//
//
//
//*****************************************************************************

require('database.php');

//get action from post array sent from either submit button on contact.html or
//delete button from admin.php
$action = filter_input(INPUT_POST, 'action');


if($action == "add_comment"){
    $dbClass = new Database();
    $dbClass->getDB();

    
    //gets values from POST array that were submitted via submit button
    $reason = filter_input(INPUT_POST, 'contactReason');
    $firstName = filter_input(INPUT_POST, 'custFirstName');
    $lastName= filter_input(INPUT_POST, 'custLastName');
    $email = filter_input(INPUT_POST, 'custEmail');
    $phone = filter_input(INPUT_POST, 'custPhone');
    $comment = filter_input(INPUT_POST, 'comment');
    
    try{
        //run function from Database class with values received from POST array as arguments
        $db=$dbClass ->addComment($reason, $firstName, $lastName, $email, $phone, $comment);
    } catch (Exception $ex) {
        $error = "There was a problem adding your comment, please try again later";
        $error_message = $e->getMessage();
        include('../errors/error.php');
    }
    
    
    //route to thankyou.php page
    header('Location: ../thankyou.php');
   
}

else if($action == "delete_visitor"){
    $dbClass = new Database();
    $db= $dbClass->getDB();
    
    //gets values from POST array that were submitted via delete button
    $visitor_id = filter_input(INPUT_POST, 'visitorID');
    
    //run function from Database class with values received from POST array as arguments
    try{
        $db=$dbClass->deleteComment($visitor_id);
    } catch (Exception $e) {
        $error = "There was a problem removing the value";
        $error_message = $e->getMessage();
        include('../errors/error.php');
    }
    
    
    //route to admin.php page
    header('Location: ../admin.php');include('../thankyou.php');
}
else if($action == "newsletter"){
//    include_once("database.php");
    
    $dbClass = new Database();
    $db = $dbClass->getDB();
    
    $first = filter_input(INPUT_POST, 'newsFirstName');
    $last = filter_input(INPUT_POST, 'newsLastName');
    $email = filter_input(INPUT_POST, 'newsEmail');
    $reason = filter_input(INPUT_POST, 'heardFrom');
    
    try{
        $db = $dbClass->newsletterSignup($first, $last, $email, $reason);
    } catch (Exception $ex) {
        $error = "There was a problem adding you to the newsletter, please try again"
                . "later";
        $error_message = $e->getMessage();
        include('../errors/error.php');
    }
    
//    include('../thankyou.php');
    header('Location: ../thankyou.php');
    
}




?>


