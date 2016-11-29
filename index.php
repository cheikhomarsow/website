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
                <div id="articles_content">
                    <?php
                        require('dbconnect.php');
                        if (!$bdd) {
                            die('Connexion impossible : ' . mysql_error());
                        }else{
                            echo "<h3 id=\"bienvenue\"><em>Bienvenue sur mon site ! Ici vous pouvez soumettre vos articles ainsi que lire des articles des autres utilisateurs.</em></h3>";
                        }
                    ?>
                    <p>Articles récents:</p>
                    <?php
                        require("dbconnect.php");
                        $req = $bdd->prepare("SELECT title, message, id_author FROM articles");
                        $req->execute();
                        $row = $req->fetch();
                        while ($row = $req->fetch()) {
                            echo "<article";
                            echo "<header>";
                            echo "<b>".$row['title']." </b>";
                            echo "<em>id_author ".$row['id_author']."</em>";
                            echo "</header>";
                            echo "<p>".$row['message']."</p>";
                            echo "</article>";
                            echo "<hr>";
                        }
                    ?>
                </div>
                </div>
                <div class="clear"></div>

            </div>
    </body>
</html>
