<?php
require('dbConnect.php');
$db = get_db();

$query = 'SELECT review.id, recipe.name FROM recipe JOIN review ON recipe.id = review.recipe_id';
$stmt = $db->prepare($query);
$stmt->execute();
$reviews = $stmt->fetchALL(PDO::FETCH_ASSOC);



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

        <h1 class="recipeHeader">Click on a recipe name to view full review</h1>
        <!-- <h2>Enter User ID</h2>
        <form action="recipetitView.php" method"post">
            <input type="text" name="userID"/>
            <input type="submit" name="submit" value="Submit!" />
        </form> -->

        <?php


            
                foreach ($reviews as $review)
             {
                
                $review_id = $review['id'];
                $name = $review['name'];
              
                echo "<li class='recipeNameView'><p><a href='recipetitReviewView.php?review_id=$review_id'>$name</p></li>";
                
         
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
