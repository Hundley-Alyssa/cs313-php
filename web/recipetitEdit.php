
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
$cooktime = $recipe_rows[1]['cook_time'];
$oventemp = $recipe_rows[2]['oven_temp'];
$ingredients = $recipe_rows[3]['ingredients'];
$instructions = $recipe_rows[4]['instructions'];



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




        <!-- <form method="post" action="update_recipe.php">
            <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
            Recipe Name:<br>
            <input type="text" name="recipe_name" <?php echo "value='$recipe_name'";}?>> 
            Cook Time:<br>
            <input type="number" name="cooktime" <?php echo "value='$cooktime'";}?>>
            <br>
            Oven Temperature:<br>
            <input type="number" name="oventemp" <?php echo "value='$oventemp'";}?>>
            Ingredients:<br>
            <textarea name="ingredients"></textarea <?php echo "value='$ingredients'";}?>>
            Instructions:<br>
            <textarea name="instructions"></textarea <?php echo "value='$instructions'";}?>>

            <input type="submit" value="Update Recipe">
        </form> -->
        




        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
