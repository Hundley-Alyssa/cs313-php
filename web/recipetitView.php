<?php
session_start();
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

        <?php
            try
            {
             $dbUrl = getenv('DATABASE_URL');

             $dbOpts = parse_url($dbUrl);

             $dbHost = $dbOpts["host"];
             $dbPort = $dbOpts["port"];
             $dbUser = $dbOpts["user"];
             $dbPassword = $dbOpts["pass"];
             $dbName = ltrim($dbOpts["path"],'/');

             $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            catch (PDOException $ex)
            {
             echo 'Error!: ' . $ex->getMessage();
             die();
            }


            echo '<form method="post" action ="recipetitView.php?submit=true">';
            foreach ($db->query('SELECT name FROM recipe') as $row)
             {

                '<input type="radio" name="gender" value="male" checked>'. $row['name'];
             
                 echo '<br>';
             }
             echo '<input type="submit" name="submit" value="submit" />';

             echo '</form>'

             
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
