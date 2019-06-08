<?php include './pokemons/abstractPokemon.php'; ?>
<?php include './pokemons/carapuce.php'; ?>
<?php include './pokemons/salameche.php'; ?>
<?php include './pokemons/bulbizarre.php'; ?>

<?php include './objects/interfaceObject.php'; ?>

<?php include './objects/balls/abstractBall.php'; ?>
<?php include './objects/balls/pokeball.php'; ?>
<?php include './objects/balls/superball.php'; ?>
<?php include './objects/balls/hyperball.php'; ?>
<?php include './objects/balls/masterball.php'; ?>

<?php include './objects/potions/abstractAllPotions.php'; ?>
<?php include './objects/potions/Potion.php'; ?>
<?php include './objects/potions/Superpotion.php'; ?>
<?php include './objects/potions/Hyperpotion.php'; ?>
<?php include './objects/potions/Potionmax.php'; ?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8"/>

    <title>TP Pokémon</title>
   

</head>


<body>

<?php

$carapuce = new Carapuce(6, false);

echo '<br>';

$salameche = new Salameche(6, false);

echo '<br>';

$bulbizarre = new Bulbizarre(6, false);

echo '<br> <br> ---------------- <br> <br>';

$hyperball = new Hyperball();
$hyperpotion = new Superpotion();

$salameche->attack($bulbizarre);
$carapuce->attack($bulbizarre);
$salameche->attack($bulbizarre);

echo '<br> <br> ---------------- <br> <br>';

$hyperpotion->use($bulbizarre);

echo '<br> <br> ---------------- <br> <br>';

$hyperball->use($bulbizarre);

echo '<br> <br> ---------------- <br> <br>';

var_dump($bulbizarre);
var_dump($hyperball);
var_dump($hyperpotion);


?>

    
    

</body>
    
</html>
