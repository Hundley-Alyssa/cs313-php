<!DOCTYPE html>

<html lang="en">

<head>

    <title>CS 313 | HOME</title>
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

        <div id="items">
            <figure>
                <img src="chocolate_cake.jpg" alt="Chocolate cake" title="Chocolate cake" />

                <figcaption>
                    Chocolate Dream Cake - $45

                </figcaption>


                <button>Add to cart</button>

            </figure>

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
