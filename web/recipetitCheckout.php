<?php
session_start();
?>
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

<?php

            if ( isset($_GET["delete"]) )
 {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;

 //remove item if quantity is zero
 if ($qty == 0) {
   $_SESSION["amounts"][$i] = 0;
   unset($_SESSION["cart"][$i]);
 }
 else
 {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
 }
 }

 ?>

 <h2>Cart</h2>
 <table>
 <tr>
 <th>Product</th>
 <th width="10px">&nbsp;</th>
 <th>Qty</th>
 <th width="10px">&nbsp;</th>
 <th>Amount</th>
 <th width="10px">&nbsp;</th>
 <th>Action</th>
 </tr>
 <?php
 $total = 0;
 foreach ( $_SESSION["cart"] as $i ) {
 ?>
 <tr>
 <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
 </tr>
 <?php
 $total = $total + $_SESSION["amounts"][$i];
 }
 $_SESSION["total"] = $total;
 ?>
 <tr>
 <td colspan="7">Total : <?php echo($total); ?></td>
 </tr>
 </table>
 <?php
 }
 ?>




            <form action="/recipetitConfirmation.php" method="post">
                Street Address:<br>
                <input type="text" name="address" value="123 E Example St">
                <br>
                City: <br>
                <input type="text" name="city" value="Tasty">
                <br>
                State:<br>
                <input type="text" name="state" value="Alabama">
                <br>
                Zipcode: <br>
                <input type="text" name="zipcode" value="123456">
                <br><br>
                <input type="submit" value="Checkout">
            </form> 


           
            
        	


        </div>


    </main>

    <footer>

        <?php include ("recipetitfooter.php"); ?> 
          
    </footer>

</body>

</html>
