<?php

if (!isset($_GET['recipe_id']))
{
    die("Error, recipe id not set");
}



$recipe_id = htmlspecialchars($_GET['recipe_id']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT id, name, cook_time, oven_temp, ingredients, instructions FROM recipe WHERE id=:id');
$stmt->bindValue(':id', $recipe_id, PDO::PARAM_INT);
$stmt->execute();
$recipe_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$recipe_name = $recipe_rows[0]['name'];

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
        


        <h1 class="recipeHeader"><?php echo $recipe_name;?></h1>

        <?php
            foreach($recipe_rows as $recipe_row){
                $cook_time = $recipe_row['cook_time'];
                $oven_temp = $recipe_row['oven_temp'];
                $ingredients = $recipe_row['ingredients'];
                $instructions = $recipe_row['instructions'];


                echo"<p class='recipeDetails'>Cook Time: $cook_time</p>";
                echo"<p class='recipeDetails'>Oven Temperature: $oven_temp</p>";
                echo"<p class='recipeDetails'>Ingredients: $ingredients</p>";
                echo"<p class='recipeDetails'>Instructions: $instructions</p>";
            }

            echo "<button id='editButton' class='submitButton'><a href='recipetitEdit.php?recipe_id=$recipe_id'>Edit</a></button>";
            echo "<button class='submitButton'><a href='recipetitReviewAdd.php?recipe_id=$recipe_id'>Add Review</a></button>";

        ?>

        <!-- <button><a href="recipetitEdit.php?recipe_id=$recipe_id">Edit</a></button> -->
        <!-- <button><a href="recipetitReviewAdd.php?recipe_id=$recipe_id">Add Review</a></button> -->




        
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
