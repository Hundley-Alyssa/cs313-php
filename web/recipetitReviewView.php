<?php

if (!isset($_GET['review_id']))
{
    die("Error, review id not set");
}



$review_id = htmlspecialchars($_GET['review_id']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('SELECT review.rating, review.comments, recipe.name FROM recipe JOIN review ON review.recipe_id = recipe.id WHERE review.id=:id');
$stmt->bindValue(':id', $review_id, PDO::PARAM_INT);
$stmt->execute();
$review_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$recipe_name = $review_rows[0]['name'];
?>
<!--  -->

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
            foreach($review_rows as $review_row){
                $rating = $review_row['rating'];
                $comments = $review_row['comments'];
               


                echo"<p class='recipeDetails'>Rating: $rating</p>";
                echo"<p class='recipeDetails'>Comments: $comments</p>";
              
            }

        ?>
      
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
