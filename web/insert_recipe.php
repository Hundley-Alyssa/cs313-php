<?php

// $id = $pdo->lastInsertId('recipe_id_seq');
$name = htmlspecialchars($_POST['recipe_name']);
$cook_time = htmlspecialchars($_POST['cooktime']);
$oven_temp = htmlspecialchars($_POST['oventemp']);
$ingredients = htmlspecialchars($_POST['ingredients']);
$instructions = htmlspecialchars($_POST['instructions']);




require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO recipe(name, cook_time, oven_temp, ingredients, instructions) VALUES (:name, :cook_time, :oven_temp, :ingredients, :instructions);');

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':cook_time', $cook_time, PDO::PARAM_INT);
$stmt->bindValue(':oven_temp', $oven_temp, PDO::PARAM_INT);
$stmt->bindValue(':ingredients', $ingredients, PDO::PARAM_STR);
$stmt->bindValue(':instructions', $instructions, PDO::PARAM_STR);
$stmt->execute();



$new_page = "recipetitView.php";

header("Location :$new_page");


die();

?>


