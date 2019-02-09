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
        <h2>Enter User ID</h2>
        <form action="recipetitView.php" method"post">
            <input type="text" name="userID"/>
            <input type="submit" name="submit" value="Submit!" />
        </form>

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

        

                foreach ($db->query("SELECT user_id, name FROM recipe") as $row)
             {
                echo $row['name'];
                echo '<br>';
                
              
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
