<?php
/********************************************************************/
/*  Date	Name            Description                                 */
/*  ---------------------------------------------------------------         */
/*                                                                          */
/*  9/6/2019  Brian Hernandez   -Created page for Admin Data. 
 *                              -Connected to DB
 *                              -Added button to delete row from table.
 * -----------------------------------------------------------------
 * 9/12/2019  Brian Hernandez   -added login page logic    
 * -----------------------------------------------------------------
 * 9/13/2019  Brian Hernandez   -set up delete as function sent to index.php*/

/********************************************************************/
//$username  = filter_input(INPUT_POST,'userName');
//$password = filter_input(INPUT_POST,'password');
//if (empty($password)|| empty($username)){
//    header('Location: login.html');
//}
//




try{
    include_once './Model/database.php';
//    $db = Database::getDB();
    $db = Database::getDB();
} catch (Exception $ex) {
    //echo 'Connection error: ' . $e->getMessage();
    exit();
}
    
    $action = filter_input(INPUT_POST, "action");

    if($action == NULL){
        $action = 'list_visitors';
    }
            
 
            
            
            
            
            
//set up value for listing the db
if($action == 'list_visitors'){
    

$query = 'SELECT * FROM oceanside_contact';
           
$statement = $db -> prepare($query);
$statement -> execute();
$visitors = $statement ->fetchAll();
$statement ->closeCursor();
}
      
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Administration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css"/>
    </head>
    <body>
        <header>
        <h1>Oceanside Books</h1>
    </header>
        <nav class="mobileNav">
            <a href = "#" id = "subMenu"><img src="./Images/navicon.png" alt="navIcon"></a>
        <ul id = "subTitle">
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="newsletter.html">Newsletter</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            
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
            <h1>Administration</h1>
            <section>
            <table id = "adminTable">
                <tr>
                    <th>Contact Reason</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Comment</th>
                    <th></th>
                    
                </tr>
                
                
                
            
                    
                    
                <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['contactReason']; ?></td>
                <td><?php echo $visitor['visitorFirst']; ?></td>
                <td><?php echo $visitor['visitorLast']; ?></td>
                <td><?php echo $visitor['visitorEmail']; ?></td>
                <td><?php echo $visitor['visitorPhone']; ?></td>
                <td><?php echo $visitor['comment']; ?></td>
                <td><form action="./Model/index.php" method="post">
<!--delete button form sends action with a value of 'delete_visitor' to ./Model/index.php via POST method-->
                    <input type = "hidden" name = "action" value = "delete_visitor">
<!--delete button form sends visitorID with a value of '$visitor[visitorID]' to ./Model/index.php via POST method-->
                    <input type="hidden" name="visitorID"
                           value="<?php echo $visitor['visitorID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            
            
            <?php endforeach; ?>   
            
            </table>
                </section>
                    
                    
                    
            <section>
                <a href="contact.html">Back to Contact Page</a>
                <a href="index.html">Back to Home</a>
            </section>
        </article>
    </body>
</html>
