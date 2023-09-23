<?php
    include_once("model/Users.php");
    include_once("model/usersDao.php");
    include_once("config/env.php");
    include_once("config/database.php");
    $db = new DatabaseConnector();
    $Connexion = $db->getConnection();
    


    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $passwordCrypter = password_hash($password,PASSWORD_DEFAULT);


        $user = new utilisateurs();
        $user->setName($nom);
        $user->setMail($mail);
        $user->setRole($role);
        $user->setPassword($passwordCrypter);
    
        $usersDao = new UsersDao($Connexion);
        $statut = $usersDao->Create($user);

        if($statut)
    {
        echo 'enregistré avec succes ';
    }
    else
    {
        echo ' echec de l enregistrement';
    }
    }

   

    
?>
    <!doctype html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Register</title>
            <link rel="stylesheet" href="style.css">
            <script src="miage.js"></script>
        </head>
        <body>
            <div class="login">
                <h1>Enregistrement</h1>
                <form action=" " method="POST">
                    <input type="text" name="nom" placeholder="nom" required="required" />
                    <input type="email" name="mail" placeholder="email" required="required" />
                    <input type="password" name="password" placeholder="mot de passe " required="required" />
                    <input type="text" name="role" placeholder="role" required="required" />
                    <button type="submit" class="btn btn-primary btn-block btn-large">valider</button>
                    <button type="submit" class="btn btn-danger btn-block btn-large">retour</button>
                </form>
            </div>
        </body>
    </html>