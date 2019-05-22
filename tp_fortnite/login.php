<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>login</title>


</head>


<body>

<form method="POST">
    <label>
        Login:
        <input type="text" name="login" />
    </label>

    <br>

    <label>
        Password:
        <input type="password" name="password" />
    </label>

    <br>

    <label>
        <input type="submit" name="connexion" />
    </label>
</form>

<?php 

if(isset($_POST['connexion']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = $pdo->prepare("SELECT login, password FROM user");
    $query->execute();
    $login_mdp = $query->fetchAll();
    foreach ($login_mdp as $log_mdp)
    {
        if($log_mdp['login'] == $login && $log_mdp['password'] == $password)
        {
            header('Location: ./admin.php');
        }
    }
}
?>


</body>
    
</html>