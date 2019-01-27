<?php
session_start();

$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zipcode'] = $_POST['zipcode'];

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

      
        
       <?php

            echo "Shipping to: <br>" . $_SESSION["address"] . "<br>";
            echo $_SESSION["city"] . ", "; 
            echo $_SESSION["state"] . " ";
            echo $_SESSION["zipcode"];
        ?>
        


        
            

 
        

        	
        <div id="items">

        </div>


    </main>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
