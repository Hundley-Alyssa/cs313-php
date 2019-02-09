<html>
<head>
<title>Page 1</title>
</head>
<body>
<?php
//set defaults assuming the worst
$total = 0;
$one =0;
$two=0;

//verify we have that value in $__POST
if (isset($_POST['submit']))
{
    $submit = $_POST['submit'];
    //If it is true, try some math
    if($submit == "sub-total")
        {
            if (isset($_POST['one']))
            {   
                $one = $_POST['one'];
                //Add checks to see if your values are numbers
                if ( ! is_numeric($one)) { $one = 0;}
            }

            if (isset($_POST['two']))
            {
                $two = $_POST['two'];
                if ( ! is_numeric($two)) { $two = 0;}
            }
            $total = $one + $two;
            echo " Your Price is \$ " .number_format ($total, 2, '.', ','). "<BR>";
        }
    if($submit == "submit" )
    {
        //go to page two, with the total from page1.php passed as a $__GET value
        header("Location: page2.php?total=".$total);
    }
}
?>
    <form method="post" action="page1.php?submit=true">
        <input type="text" name="one" id="one" value="<?=$one?>"/>
        <input type="text" name="two" id="two"  value="<?=$two?>"/>
        <input type="submit" name="submit" value="sub-total" />
        <input type="submit" name="submit" value="submit" />
    </form>
</body>
</html>
