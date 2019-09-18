<?php
//*****************************************************************************
//  Date            Name                                Description
//  ---------------------------------------------------------------------------
//  9/13/2019   Brian A. Hernandez  Log in page created
//
//
//
//
//*****************************************************************************

$action = filter_input(INPUT_POST,'action');
$username  = filter_input(INPUT_POST,'userName');
$password = filter_input(INPUT_POST,'password');
if ($action == NULL){
    

}else if (empty($password)|| empty($username)){
        header('Location: login.php');
    }
    else{
        header("location: admin.php");
    }





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intitial-scale = 1.0" />
    <link rel="stylesheet" href="./CSS/style.css" />
    

    <title>Login</title>
</head>

<body>


    <header>
        <h1>Login</h1>
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

    <form class="form" action="admin.php" method="post">
        <fieldset id="info">
            <legend>Login</legend>

            

            <div class="formRow" class="labels">
                <label for="userName">Username</label>
                <input type="text" id="userName" name="userName" required />
            </div>

            <div class="formRow">
                <label for="password" class="labels">Password</label>
                <input type="password" id="password" name="password" required/>
                <input type ="hidden" name ="action" value ="list_visitors">
            </div>
            <br />
                <div class="button">
                <input type="submit" value="Submit" />
                <input type="reset" value="Clear Info" />

            </div>



        </fieldset>

    </form>










    <footer>
        <img src="./Images/oceanside_logo.png" alt="Oceanside Logo">
        <p>Oceanside Books &#x274F; Buy, Sell, Trade Books &#x274F; New and Used Books</p>
    </footer>

</body>

</html>