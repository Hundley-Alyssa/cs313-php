

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
        

        <h1 class="recipeHeader">Add New Recipe</h1>
        <!-- <h2><?php echo $recipe_name;?></h2> -->

        <form method="post" action="insert_recipe.php">
            <!-- <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>"> -->
            Recipe Name:<br>
            <input class="formInputs" type="text" name="recipe_name"><br>
            Cook Time:<br>
            <input class="formInputs" type="number" name="cooktime">
            <br>
            Oven Temperature:<br>
            <input class="formInputs" type="number" name="oventemp"><br>
            Ingredients:<br>
            <textarea class="formInputs" name="ingredients"></textarea><br>
            Instructions:<br>
            <textarea class="formInputs" name="instructions"></textarea><br>

            <input class="submitButton" type="submit" value="Add Recipe">
        </form>

        



        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
