<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>admin</title>


</head>


<body>

<p>Liste des spawns disponible:</p>

<?php
$query = $pdo->prepare("SELECT name FROM spawn");
$query->execute();
$spawns = $query->fetchAll();
?>
<ul>

<?php

foreach ($spawns as $spawn)
{
    
    echo '<li>' . $spawn['name'] . '</li>';

}
?>
</ul>


</body>
    
</html>