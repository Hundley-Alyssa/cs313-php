<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <title>CS 313 | HOME</title>
    <meta charset="utf-8" />
    <link href="myhome.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

</head>

<body>

    
     <?php include ("recipetitheader.php"); ?>         


    <main>
        <div>

            <?php include ("recipetitnav.php"); ?> 
        </div>


        <p>As a member of Recipétit, you have the exclusive opportunity to order baked goods from Lo's Kitchen. The order includes her one-of-a-kind recipes that can ONLY be purchased here!</p>

        <div id="items">






            <form action="/recipetitConfirmation.php" method="post">
                Street Address:<br>
                <input type="text" name="address" value="123 E Example St">
                <br>
                City: <br>
                <input type="text" name="city" value="Tasty">
                <br>
                State:<br>
                <input type="text" name="state" value="Alabama">
                <br>
                Zipcode: <br>
                <input type="text" name="zipcode" value="123456">
                <br><br>
                <input type="submit" value="Checkout">
            </form> 


           
            
        	


        </div>


    </main>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
