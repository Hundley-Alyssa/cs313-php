<?php

// $id = $pdo->lastInsertId('recipe_id_seq');
$recipe_id = htmlspecialchars($_POST['recipe_id']);
$comments = htmlspecialchars($_POST['comments']);
$rating = htmlspecialchars($_POST['rating']);


require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO review(comments, rating, recipe_id) VALUES (:comments, :rating, :recipe_id);');

$stmt->bindValue(':comments', $comments, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->bindValue(':recipe_id', $recipe_id, PDO::PARAM_INT);
$stmt->execute();



$newpage = "recipetitViewRecipe.php?recipe_id=$recipe_id";

header('Location: recipetitView.php');


die();

?>


