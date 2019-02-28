<?php
require('dbConnect.php');
$db = get_db();

$query = 'SELECT id, name, cook_time, oven_temp, ingredients, instructions FROM recipe';
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

        <h1 class="recipeHeader">Click on a recipe name to view full recipe</h1>
        

        <?php
        
                foreach ($recipes as $recipe)
             {
                
                $recipe_id = $recipe['id'];
                $name = $recipe['name'];
                $cookTime = $recipe['cook_time'];
                $cookTime = $recipe['oven_temp'];
                $cookTime = $recipe['ingredients'];
                $cookTime = $recipe['instructions'];
                echo "<li class='recipeNameView'><p><a href='recipetitViewRecipe.php?recipe_id=$recipe_id'>$name</p></li>";
                
         
             }
             
        ?>


    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
