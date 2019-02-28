
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
$cooktime = $recipe_rows[0]['cook_time'];
$oventemp = $recipe_rows[0]['oven_temp'];
$ingredients = $recipe_rows[0]['ingredients'];
$instructions = $recipe_rows[0]['instructions'];



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

        <h1 class="recipeHeader">Update Recipe</h1>


       <form method="post" action="update_recipe.php">
            <input class="formInputs" type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
            Recipe Name:<br>
            <input class="formInputs" type="text" name="recipe_name" value="<?php echo $recipe_name;?>"><br>
            Cook Time:<br>
            <input class="formInputs" type="number" name="cooktime" value="<?php echo $cooktime;?>">
            <br>
            Oven Temperature:<br>
            <input class="formInputs" type="number" name="oventemp" value="<?php echo $oventemp;?>"><br>
            Ingredients:<br>
            <input class="formInputs" name="ingredients" value="<?php echo $ingredients;?>"><br>
            Instructions:<br>
            <input class="formInputs" name="instructions" value="<?php echo $instructions;?>"><br>

            <input class="submitButton" type="submit" value="Update Recipe">
        </form>

        




        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
