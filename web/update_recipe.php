<?php


$recipe_id = htmlspecialchars($_POST['recipe_id']);
$name = htmlspecialchars($_POST['recipe_name']);
$cookTime = htmlspecialchars($_POST['cooktime']);
$ovenTemp = htmlspecialchars($_POST['oventemp']);
$ingredients = htmlspecialchars($_POST['ingredients']);
$instructions = htmlspecialchars($_POST['instructions']);



require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('UPDATE recipe SET name=:name, cook_time=:cook_time, oven_temp=:oven_temp, ingredients=:ingredients, instructions=:instructions WHERE id=:id;');

$stmt->bindValue(':id', $recipe_id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':cook_time', $cookTime, PDO::PARAM_INT);
$stmt->bindValue(':oven_temp', $ovenTemp, PDO::PARAM_INT);
$stmt->bindValue(':ingredients', $ingredients, PDO::PARAM_STR);
$stmt->bindValue(':instructions', $instructions, PDO::PARAM_STR);
$stmt->execute();

$new_page = "recipetitEdit.php?recipe_id=$recipe_id";

header('Location: recipetitView.php');


die();

?>


