<?php

if (!isset($_GET['recipe_id'])){
    die("Error, recipe id not set");
}



$recipe_id = htmlspecialchars($_GET['recipe_id']);
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <title>CS 313 | SHOPPING</title>
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
        


        <h2><?php echo $recipe_id?></h2>


        
        <!-- <h2>Enter User ID</h2>
        <form method="post" action="recipetitView.php?submit=true">
            <input type="text" name="userID" id="userID" value=""/>
            <input type="submit" name="submit" value="submit" />
    </form>


    
        
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other   -->


    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
