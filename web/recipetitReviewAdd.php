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
        


        <!-- <h2><?php echo $recipe_name;?></h2> -->

       

        <form method="post" action="insert_review.php">
            <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
            Comments:<br>
            <textarea name="comments"></textarea>
            <br>
            Rating:<br>
            <input type="number" name="rating">
            <br>
            <input class="submitButton" type="submit" value="Submit Review">
        </form>
        



        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
