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
                    if(isset($_POST["username"]) && isset($_POST["password"])) {
                        $username = htmlentities(trim($_POST["username"]));
                        $password = htmlentities(trim($_POST["password"]));
                        require("dbconnect.php");
                        if($username && $password){
                            $password = md5($password);
                            $stmt = $bdd->prepare("SELECT * FROM users WHERE username = '$username' && password = '$password'");
                            $stmt->bindParam(':username', $username);
                            $stmt->execute();
                            if($stmt->rowCount() == 1){
                                $_SESSION['username'] = $username;
                                header('location:mes_articles.php');
                            }else{
                                echo "<p class='message_error'>pseudo ou mot de passe incorrect</p>";
                                include("formulaire_connexion.php");

                            }
                        }
                    }else{
                        echo "<p class='message_error'>Veillez remplir tous les champs</p>";
                        include("formulaire_connexion.php");
                    }
                ?>
            </div>
            <div class="clear"></div>

        </div>
    </body>
</html>



