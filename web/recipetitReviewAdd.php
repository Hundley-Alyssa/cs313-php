

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

       
<!--             <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> -->
            Comments:<br>
            <textarea name="comments">
            <br>
            Rating:<br>
            <input type="number" name="rating">
            <br>
            <input type="submit" value="Submit Review">
        </form>
        



        
       
    </main>

    <script src="recipetitScripts.js"></script>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
