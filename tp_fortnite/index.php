<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>tp fortnite</title>


</head>


<body>

    <form method="POST">
        <button class="btn-href" name="submit">Tirer un spawn aléatoire !</button>
    </form>

    <?php

        if(isset($_POST['submit']))
        {
            $query = $pdo->prepare("SELECT id FROM spawn");
            $query->execute();
            $spawns_id = $query->fetchAll();
            
            $query = $pdo->prepare("SELECT name FROM spawn WHERE id =" . $spawns_id[array_rand($spawns_id)]['id']);
            $query->execute();
            $spawns = $query->fetch();
            echo $spawns['name'] . "\n";
            ?>
            <img src="images/<?php echo str_replace(' ', '_',$spawns['name']) ?>.jpg" alt="spawn" title="spawn"/>
            <?php
            

        }

    ?>

</body>
    
</html>