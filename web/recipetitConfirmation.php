

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


    
            

        Shipping to: <?php echo $_SESSION["address"]; <br> echo $_SESSION["city"]; <p>, </p> echo $_SESSION"state"]; <p> </p> echo $_SESSION["zipcode"];?> 
        

        	
        <div id="items">

        </div>


    </main>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
