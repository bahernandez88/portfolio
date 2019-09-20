<?php
include_once('./Model/employees.php');
//*****************************************************************************
//  Date            Name                                Description
//  ---------------------------------------------------------------------------
//  9/11/2019   Brian A. Hernandez   list employees fires as function
//  9/13/2019   Brian A. Hernandez   list employees fires as funcion from
//                                   external page.
//
//
//
//*****************************************************************************



$employees = EmployeeDB::getEmployees();


?>


<!DOCTYPE html>

<html>
    <head>
        <title>Employee List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="stylesheet" href="CSS/adminstyle.css"/>
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
            <li><a href = login.php">Admin Data</a></li>
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
            
            <h1>Employee List</h1>
            
                
                
            <ul>
                <?php foreach ($employees as $employee) : ?>
                
                <li> <?php echo $employee->getFirstName() . " " .
                  $employee->getLastname(); ?>       </li> 
                
                </tr>
                <?php endforeach;?>
            </ul>
                    
                    
           
            <section>
                <p><a href="newsletter.html">Back to Newsletter Page</a></p>
                <p><a href="index.html">Back to Home</a></p>
            </section>
        </article>
    </body>
     <footer>
        <img src="./Images/oceanside_logo.png" alt="Oceanside Logo">
        <p>Oceanside Books &#x274F; Buy, Sell, Trade&#x274F; New and Used Books</p>
    </footer>
</html>
