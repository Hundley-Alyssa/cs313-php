<?php
require('dbConnect.php');
$db = get_db();

$query = 'SELECT id, name FROM recipe';
$stmt = $db->prepare($query);
$stmt->execute();
$recipes = $stmt->fetchALL(PDO::FETCH_ASSOC);



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

        <h2>Click on a recipe name to view full recipe</h2>
        <!-- <h2>Enter User ID</h2>
        <form action="recipetitView.php" method"post">
            <input type="text" name="userID"/>
            <input type="submit" name="submit" value="Submit!" />
        </form> -->

        <?php


            
                foreach ($recipes as $recipe)
             {
                
                $recipeId = $recipe['id'];
                $name = $recipe['name'];

                echo "<li><p>$name</p></li>";
                
         
             }
            

            
          

             
        ?>


        
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
