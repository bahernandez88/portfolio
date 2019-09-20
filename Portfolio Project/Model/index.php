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
    $db= $dbClass->getDB();
    //gets values from POST array that were submitted via submit button
    $reason = filter_input(INPUT_POST, 'contactReason');
    $firstName = filter_input(INPUT_POST, 'custFirstName');
    $lastName= filter_input(INPUT_POST, 'custLastName');
    $email = filter_input(INPUT_POST, 'custEmail');
    $phone = filter_input(INPUT_POST, 'custPhone');
    $comment = filter_input(INPUT_POST, 'comment');
    
    //run function from Database class with values received from POST array as arguments
    $db=$dbClass ->addComment($reason, $firstName, $lastName, $email, $phone, $comment);
    
    //route to thankyou.php page
    header('Location: ../thankyou.php');
   
}

if($action == "delete_visitor"){
    $dbClass = new Database();
    $db= $dbClass->getDB();
    
    //gets values from POST array that were submitted via delete button
    $visitor_id = filter_input(INPUT_POST, 'visitorID');
    
    //run function from Database class with values received from POST array as arguments
    $db=$dbClass->deleteComment($visitor_id);
    
    //route to admin.php page
    header('Location: ../admin.php');
}
else if($action == "newsletter"){
    $dbClass = new Database();
    $db = $dbClass->getDB();
    
    $first = filter_input(INPUT_POST, 'newsFirstName');
    $last = filter_input(INPUT_POST, 'newsLastName');
    $email = filter_input(INPUT_POST, 'newsEmail');
    $reason = filter_input(INPUT_POST, 'heardFrom');
    
    $db = $dbClass->newsletterSignup($first, $last, $email, $reason);
    
    header('Location: ../thankyou.php');
}







?>