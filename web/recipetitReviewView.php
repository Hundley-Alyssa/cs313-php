<?php

if (!isset($_GET['review_id']))
{
    die("Error, review id not set");
}



$review_id = htmlspecialchars($_GET['review_id']);

// require('dbConnect.php');
// $db = get_db();

// $stmt = $db->prepare('SELECT review.id, review.rating, review.comments, recipe.name FROM recipe JOIN review ON recipe.id = review.recipe_id WHERE id=:id');
// $stmt->bindValue(':id', $review_id, PDO::PARAM_INT);
// $stmt->execute();
// $review_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $review_name = $review_rows[1]['name'];
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
        


        <h2><?php echo $review_id?></h2>

        <?php
            // foreach($review_rows as $review_row){
            //     $rating = $review_row['rating'];
            //     $comments = $review_row['comments'];
               


            //     echo"<p>$rating</p>";
            //     echo"<p>$comments</p>";
              
            // }

        ?>

        <button><a href="reviewEdit.php">Edit</a></button>




        
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
