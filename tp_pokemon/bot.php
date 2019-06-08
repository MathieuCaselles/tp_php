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

    <title>Bot TP Pokémon</title>
   

</head>


<body>

<?php

// création des 3 pokeball
$inventairePokeball = array();

for ($i = 1; $i <= 3; $i++) 
{
    array_push($inventairePokeball, new Pokeball());
}


// création des potions
$inventairePotion = array();

for ($i = 1; $i <= 2; $i++) 
{
    array_push($inventairePotion, new Potion());
}

// création de la superpotion
$inventaireSuperpotion = array();
array_push($inventaireSuperpotion, new Superpotion());

// création du carapuce allié
$carapuce = new Carapuce(5, true);

//création du salameche ennemie
$salameche = new Salameche(8, false);

echo '<br> ---------------- <br> <br>';

echo $carapuce->getName() . ":" . '  lvl: ' . $carapuce->getLevel() . ', PV: ' . $carapuce->getLife() . '/' . $carapuce->getMaxLife() . ' <br>'; 
echo $salameche->getName() . ":" . '  lvl: ' . $salameche->getLevel() . ', PV: ' . $salameche->getLife() . '/' . $salameche->getMaxLife() . ' <br>'; 


//sert a faire plus jolie
echo '<br> ---------------- <br>';


//déroulement du combat dans le but de capturer Salameche

$nombreTour = 0;

while ($salameche->getLife() != 0 && $carapuce->getLife() != 0) {
    echo 'Tour ' . $nombreTour += 1 ;
    echo '<br> ---------------- <br> <br>';
    
    if ($carapuce->getLife() <= 65 && !empty($inventairePotion)) 
    {
        $inventairePotion[0]->use($carapuce);
        unset($inventairePotion[0]);
        $inventairePotion = array_values($inventairePotion);
        echo '<br>';

        $salameche->attack($carapuce);
        echo '<br> ---------------- <br>';
        continue;
    }
    elseif($carapuce->getLife() <= 35 && !empty($inventaireSuperpotion))
    {
        $inventaireSuperpotion[0]->use($carapuce);
        unset($inventaireSuperpotion[0]);
        $inventaireSuperpotion = array_values($inventaireSuperpotion);
        echo '<br>';

        $salameche->attack($carapuce);
        echo '<br> ---------------- <br>';
        continue;
    }
    
    $salameche->attack($carapuce);

    echo '<br>';

    if ($salameche->getLife() < 70)
    {
        if(!empty($inventairePokeball))
        {
            $inventairePokeball[0]->use($salameche);
            if($salameche->getCapture() == true)
            {
                echo '<br>';
                break;
            }
            unset($inventairePokeball[0]);
            $inventairePokeball = array_values($inventairePokeball);

            echo '<br> ';
        }
        else
        {
            $carapuce->attack($salameche);
            echo '<br>';
        }
    }
    else
    {
        $carapuce->attack($salameche);
        echo '<br>';
    }
    echo ' ---------------- <br>';

}



echo "Fin du combat ! <br>"




?>

    
    

</body>
    
</html>
