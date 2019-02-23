<?php

$recipe_id = htmlspecialchars($_POST['recipe_id']);
$cookTime = htmlspecialchars($_POST['cooktime']);
$ovenTemp = htmlspecialchars($_POST['oventemp']);
$ingredients = htmlspecialchars($_POST['ingredients']);
$instructions = htmlspecialchars($_POST['instructions']);


echo "$recipe_id\n";
echo $cookTime;
echo $ingredients;


// require('dbConnect.php');
// $db = get_db();

// $stmt = $db->prepare('SELECT id, name, cook_time, oven_temp, ingredients, instructions FROM recipe WHERE id=:id');
// $stmt->bindValue(':id', $recipe_id, PDO::PARAM_INT);
// $stmt->execute();
// $recipe_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $recipe_name = $recipe_rows[0]['name'];


?>


