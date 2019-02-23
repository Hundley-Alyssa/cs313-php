

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
        


        <!-- <h2><?php echo $recipe_name;?></h2> -->

        <form method="post" action="insert_recipe.php">
            <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
            Recipe Name:<br>
            <input type="text" name="recipename"> 
            Cook Time:<br>
            <input type="number" name="cooktime">
            <br>
            Oven Temperature:<br>
            <input type="number" name="oventemp">
            Ingredients:<br>
            <textarea name="ingredients"></textarea>
            Instructions:<br>
            <textarea name="instructions"></textarea>

            <input type="submit" value="Add Recipe">

        



        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
