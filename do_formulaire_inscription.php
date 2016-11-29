<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Cheikh Omar SOW">
    <link rel="stylesheet" href="style.css">
    <title>My fisrt official web site</title>
</head>
<body>
    <?php
        include("top_bar.php");
    ?>
    <div id="content" main="role">
        <?php
            include('aside.php');
        ?>
        <div id="content_box">
            <?php
                if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["repeat_password"])){

                    $username = htmlentities(trim($_POST["username"]));
                    $password = htmlentities(trim($_POST["password"]));
                    $repeat_password = htmlentities(trim($_POST["repeat_password"]));
                    if($password !== $repeat_password){
                        echo "<p class='message_error'>Les passwords doivent être identiques</p>";
                        include("formulaire_inscription.php");
                    }else{
                        $password = md5($password);
                        require('dbconnect.php');
                        $stmt = $bdd->prepare("SELECT username FROM users WHERE username = '$username'");
                        $stmt->bindParam(':username', $username);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            echo "<p class='message_error'>Le pseudo ".$username." existe déjà!</p>";
                            include("formulaire_inscription.php");
                        } else {
                            $req = $bdd->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');
                            $req->execute(array(
                                'username' => $username,
                                'password' => $password,
                            ));
                            echo "<p class='message_succes'>Inscription reussi</p>";
                            include("formulaire_connexion.php");
                        }
                        $stmt->closeCursor();
                    }
                }else{
                    echo "<p class='message_error'>Veillez remplir tous les champs</p>";
                    include("formulaire_inscription.php");
                }
            ?>
        </div>
        <div class="clear"></div>

    </div>
</body>
</html>
