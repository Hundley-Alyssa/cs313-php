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


        <p>As a member of Recipétit, you have the exclusive opportunity to order baked goods from Lo's Kitchen. The order includes her one-of-a-kind recipes that can ONLY be purchased here!</p>



        <?php 
        $products = array("Chocolate Dream Cake", "Luscious Lemon Cake", "Chocolate Raspberry Love Cake", "Birthday Suit Cake");
        $amounts = array("45", "45", "50", "50");

        if ( !isset($_SESSION["total"]) ) {

            $_SESSION["total"] = 0;

        for ($i=0; $i< count($products); $i++) {
            $_SESSION["qty"][$i] = 0;
            $_SESSION["amounts"][$i] = 0;
            }
        }

    

if ( isset($_GET["add"]) )
{
$i = $_GET["add"];

$qty = $_SESSION["qty"][$i] + 1;

$_SESSION["amounts"][$i] = $amounts[$i] * $qty;
$_SESSION["cart"][$i] = $i;
$_SESSION["qty"][$i] = $qty;
}


?>







        <div id="items">

        <?php
            for ($i=0; $i< count($products); $i++) {
        ?>   
            <figure>
                <img src="chocolate_cake.jpg" alt="Chocolate cake" title="Chocolate cake" />

                <figcaption>
                    <?php 

                    echo($products[$i]) . " - ";
                    echo($amounts[$i]); 
                    ?>

                    <button><a href="?add=<?php echo($i); ?>">Add to cart</a></button>



                </figcaption>


            

            </figure>

            <?php
            }
        ?>

            <figure>
                <img src="lemon_cake.jpg" alt="lemon cake" title="lemon cake" />

                <figcaption>
                    Luscious Lemon Cake - $45

                </figcaption>
                <button>Add to cart</button>

            </figure>

            <figure>
                <img src="chocolate_raspberry_cake.jpg" alt="chocolate raspberry cake" title="chocolate raspberry cake" />

                <figcaption>
                    Chocolate Raspberry Love Cake - $50

                </figcaption>
                <button>Add to cart</button>

            </figure>

            <figure>
                <img src="birthday_suit.jpg" alt="birthday cake" title="birthday cake" />

                <figcaption>
                    Birthday Suit Cake - $50

                </figcaption>
                <button>Add to cart</button>

            </figure>

        	


        </div>


    </main>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
